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


Route::get('/', 'TravelController@showMain')->name('main');

Route::get('/contact', 'TravelController@showContact')->name('contact');

Route::post('/contact/mail', 'TravelController@exeMail')->name('mail');

Route::get('/travel/{id}', 'TravelController@showDetail')->where('id', '[0-9]+')->name('detail');

Route::get('/travel/edit/{id}', 'TravelController@showEdit')->where('id', '[0-9]+')->name('edit');

Route::post('/travel/delete/{id}', 'TravelController@exeDelete')->where('id', '[0-9]+')->name('delete');

Route::get('/travel/form', 'TravelController@showForm')->name('form');

Route::get('/travel/hoka_toho', 'TravelController@showHoka_toho');

Route::get('/travel/kanto', 'TravelController@showKanto');

Route::get('/travel/tubu', 'TravelController@showTubu');

Route::get('/travel/kansai', 'TravelController@showKansai');

Route::get('/travel/cyugoku', 'TravelController@showCyugoku');

Route::get('/travel/shikoku', 'TravelController@showShikoku');

Route::get('/travel/kyu_oki', 'TravelController@showKyu_oki');

Route::post('/travel/update', 'TravelController@exeUpdate')->name('update');

Route::post('/travel/create', 'TravelController@exeCreate')->name('create');

Route::get('/travel/create', function() {
    return redirect('travel/form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');