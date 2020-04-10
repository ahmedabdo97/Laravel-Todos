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

/*
-----------------------
/ New Blade Router View
-----------------------
*/

Route::get('/new', [
    'uses' =>  'PagesController@new'
]);

/*
-----------------------
/ Todos Router View
-----------------------
*/

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

/*
-----------------------
/ Receive New Todo From Form Router View
-----------------------
*/

Route::post('create/todo', [
    'uses' => 'TodosController@store'
]);

/*
-----------------------
/ Delete Todo From Form Router View
-----------------------
*/

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

/*
-----------------------
/ Update Todo From Form Router View
-----------------------
*/

Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

/*
-----------------------
/ Save Updated Todo From Form Router View
-----------------------
*/

Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);

/*
-----------------------
/ Completed Todo From Form Router View
-----------------------
*/

Route::get('/todos/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as' => 'todos.completed'
]);
