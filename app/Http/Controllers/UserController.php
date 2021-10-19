<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    // LIST JOBS
    public function listJobs()
    {
        $jobs = DB::table('jobs')->orderBy('id', 'DESC')->paginate(5);

        return view('site.jobs', [
            'jobs' => $jobs
        ]);
    }

    // LIST JOBS IT
    public function listJobsIt()
    {
        $jobs = DB::table('jobs_it')->orderBy('id', 'DESC')->paginate(5);

        return view('it.lavori', [
            'jobs' => $jobs
        ]);
    }


    //SEND FORM
    public function sendForm(Request $request)
    {

        $rules = [
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required'
        ];


        $messages = [
            'firstName.required' => 'O campo deve ser preenchido!',
            'firstName.min' => 'O nome deve conter no min. 3 letras!',
            'lastName.required' => 'O campo deve ser preenchido!',
            'lastName.min' => 'O sobrenome deve conter no min. 3 letras!',
            'email.required' => 'O campo deve ser preenchido',
            'email.email' => 'O e-mail enviado não tem um formato válido!',
            'subject.required' => 'O campo deve ser preenchido!',
            'subject.min' => 'O assunto deve conter no min. 3 letras!',
            'message.required' => 'O campo deve ser preenchido'
        ];

        $request->validate($rules, $messages);


        $email = new Email($request);

        Mail::send($email);

        return redirect()->back()->with('success', 'O seu e-mail foi enviado com sucesso!');

        //return redirect()->back()->with('error', 'Error ao enviar!');

    }


}
