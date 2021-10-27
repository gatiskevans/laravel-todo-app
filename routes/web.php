<?php

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

Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'store']);
