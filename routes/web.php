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

Route::get('/hello', function () {
    echo "Hello World";
});

Route::get('person', 'PersonController@index');

// Route::get('/person/show/{param}', 'PersonController@show');

Route::resource('Student', 'StudentController');

Route::get('/person', 'PersonController@index')->name('person.index');

Route::get('/person/sendData', 'PersonController@sendData');

Route::get('/person/create', 'PersonController@create')->name('person.create');

Route::post('/person/store', 'PersonController@store')->name('person.store');
Route::post('/person/save', 'PersonController@store')->name('person.save');