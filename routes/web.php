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

use App\Http\Controllers\contacsController;

Route::get('/', function () {
    return view('web/index');
});
Auth::routes();

// get
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/contacs', 'HomeController@contacs');

Route::get('/getcontacs', 'HomeController@getContacs');
Route::get('/members', 'HomeController@members');
Route::get('/mils', 'HomeController@mils');
Route::get('/bazar', 'HomeController@bazar');



// post
Route::post('/postcontacs', 'HomeController@postContacs');

//Delete

Route::delete('/delete/{id}', 'HomeController@delete');
