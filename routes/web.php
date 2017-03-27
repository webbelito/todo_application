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
    return redirect('tasks/');
});


Auth::routes();

Route::resource('tasks', 'TaskController');
Route::patch('tasks/{task}', 'TaskController@complete');

Route::get('/home', 'HomeController@index');
