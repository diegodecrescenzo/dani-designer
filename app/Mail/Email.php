<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

/**
 * Class Email
 * @package App\Mail
 */
class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Request
     */
    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->user = $request;
    }


    /**
     * @return
     */
    public function build()
    {
            $this->subject($this->user->subject);
            $this->to('danunciacao@ucs.br', 'Daniele Anunciação');

            return $this->markdown('site.email', [
                'user' => $this->user
            ]);
    }

}
