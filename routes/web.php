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

Route::get('/retrieve_names','NameController@retrieveNames');

Route::post('/admin/addtasks','TasksController@AddTasks');

Route::get('/getAllTaskings','TasksController@getAllTaskings');



//Trying

Route::get('/getAllBatchNames', 'TasksController@getAllNames');

Route::get('/generateTasks', 'TasksController@generateTasks');
Route::get('/returnCenter', 'TasksController@fetchCenter');
