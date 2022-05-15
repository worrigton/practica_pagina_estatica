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

Route::get('/', function () {
    return view('pages/home');
});


/*CONTANTO*/
Route::get('/contacto', function () {
  return view('pages/contact');
});

/*PREGUNTAS FRECUENTES*/
Route::get('/faq', function () {
  return view('pages/blog');
});

Route::post('mail_contact', 'MailController@mail_contact');
Route::post('mail_demo'   , 'MailController@mail_demo');
Route::resource('mail'    , 'MailController');
