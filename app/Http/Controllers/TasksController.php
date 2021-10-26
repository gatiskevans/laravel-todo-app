<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController
{
    public function index(): void
    {
        $task = new Task(1, 'Test', 'In Progress');
        echo $task->getTask();
    }
}
