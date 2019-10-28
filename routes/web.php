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
    return view('landing');
});


Route::get('/beneficios-y-planes', function () {
    return view('beneficios');
});

Route::get('/sala-de-juntas', function () {
    return view('sala_juntas');
});

Route::get('/ubicacion', function () {
    return view('ubicacion');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

/* Route::post('/contact', 'MailController@sendContact'); */
Route::post('/contact/send', 'MailController@sendContact');
Route::get('/gracias', function () {
    return view('gracias');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/aviso-de-privacidad', function () {
    return view('aviso_privacidad');
});
