<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});





//Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@home')->name('home');

Route::resource('/enviadenuncia', 'PostControlador');

Route::get('/denuncia', 'PostControlador@home');
Route::post('/arquivo', 'PostControlador@store');
Route::delete('d/{id}', 'PostControlador@destroy');
Route::get('a/download/{id}', 'PostControlador@download');


Auth::routes();


Route::resource('/user', 'UserController');
Route::get('/user/listar/{id}', 'UserController@show');

//Route::get('/user/index', 'UserController@index');








Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::resource('denuncia', 'DenunciaController');