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
route::resource('projects', 'projectsController');

// Route::get('/project', 'projectsController@index');

// Route::get('/project/create', 'projectsController@create');

// Route::get('/project/{project}', 'projectsController@show');

// Route::post('/project', 'projectsController@store');

// Route::get('/project/{project}/edit', 'projectsController@edit');

// Route::patch('/project/{project}', 'projectsController@update');

// Route::delete('/project/{project}', 'projectsController@destroy');


