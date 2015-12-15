<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Todo;

Route::get('/api/todos', function () {
    $todos =  Todo::all()->toArray(); 
    return response()->json($todos);
});
Route::resource('todo', 'TodoController');
