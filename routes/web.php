<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [TasksController::class, 'index']);
