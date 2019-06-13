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

route::post('/projects/{project}/tasks', 'projectTasksController@store');
route::patch('/tasks/{task}', "projectTasksController@update");

