<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Portoghese
 */
// HOME
Route::get('/', function () {
    return view('site.home');
})->name('site.home');

//ABOUT
Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.about');

//JOBS
Route::get('/jobs', 'UserController@listJobs')->name('site.jobs');

//CONTACT
Route::get('/contato', function () {
    return view('site.contato');
})->name('site.contact');
Route::post('/contato', 'UserController@sendForm')->name('site.contact');

//TERMS
Route::get('/termos', function (){
    return view('site.termos');
})->name('site.terms');


/**
 * Italian
 */
// HOME
Route::get('/inizio', function () {
    return view('it.inizio');
})->name('it.inizio');

//ABOUT
Route::get('/chisono', function () {
    return view('it.chisono');
})->name('it.about');

//JOBS
Route::get('/lavori', 'UserController@listJobsIt')->name('it.lavori');

//CONTACT
Route::get('/contatto', function () {
    return view('it.contatto');
})->name('it.contact');
Route::post('/contatto', 'UserController@sendForm')->name('it.contact');

//TERMS
Route::get('/termini', function (){
    return view('it.termini');
})->name('it.terms');

