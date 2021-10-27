<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks', [
        'tasks' => Task::all()
    ]);
});

Route::get('task/{task}', function(Task $task)
{
    return view('task', [
        'task' => $task
    ]);
});

Route::get('register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'showLogin'])->middleware('guest');
Route::post('login', [LoginController::class, 'login'])->middleware('guest');
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth');
