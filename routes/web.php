<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::resource('todo', TodoController::class);

Route::resource('goal', GoalController::class);
