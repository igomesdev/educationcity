<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//students
Route::get('/student/overview', 'StudentsController@show');

Route::get('/student/create', 'StudentsController@create');

Route::post('/home', 'StudentsController@store');

//grades
Route::get('/grade/testoverview', 'GradesController@show');

Route::get('/grade/create', 'GradesController@create');

Route::post('/grade/testoverview', 'GradesController@store');
