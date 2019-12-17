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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/html',function(){
    return view('/html');
});
Route::post('/html',function(){
    return view('/html');
});

Route::get('/css3',function(){
    return view('/css3');
});

Route::get('/javascript',function(){
    return view('/javascript');
});

Route::get('/php',function(){
    return view('/php');
});

Route::get('/phpPeliculas','MoviesController@index');

Route::post('/phpPeliculas','MoviesController@store');

Route::get('/oop',function(){
    return view('/oop');
});

Route::get('/sql',function(){
    return view('/sql');
});

Route::post('/sql', 'UsuarioController@store');

Route::get('/laravel',function(){
    return view('/laravel');
});
Route::get('/libro',function(){
    return view('/libro');
});

Route::post('/libro', 'UsuarioController@update');

Route::get('/git',function(){
    return view('/git');

});

Route::get('/tateti',function(){
    return view('/tateti');
});

Route::get('/scrum',function(){
    return view('/scrum');
});

