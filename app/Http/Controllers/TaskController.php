<?php 
namespace App\Http\Controllers;

use App\Models\Task as ModelsTask;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    // app/Http/Controllers/TaskController.php
public function index()
{
    return view('task.index'); // Shows resources/views/task/index.blade.php
}

public function create()
{
    return view('task.create'); // Shows resources/views/task/create.blade.php
}

    public function store()
    {
        $task =ModelsTask::create([
            'description'=>request('description'),
        ]) ;
      return "Your data has been stored in databases.";
        //return dd($task);
        // ->with('success', 'Task created!');
    }
}