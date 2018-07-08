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
use App\Http\Middleware\preventBackButton;

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'  => ['preventbackbutton','auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('employees','EmployeesController');

});
