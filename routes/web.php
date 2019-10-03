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
Route::get('/home/users', 'HomeController@users');



// post
Route::post('/contacs', 'contacsController@index');
