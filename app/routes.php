<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('tasks', 'TaskController');
Route::post('tasks', 'TaskController@create');
Route::put('tasks', 'TaskController@update');
Route::delete('tasks', 'TaskController@destroy');

Route::get('{data?}', function()
{
    return View::make('app');
})->where('data', '.*');


