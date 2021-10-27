<?php

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
