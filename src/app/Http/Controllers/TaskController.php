<?php 
namespace App\Http\Controllers;

use App\Models\Task as ModelsTask;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    // app/Http/Controllers/TaskController.php

    public function smritiMethod()
    {
        $tasks=ModelsTask::all();
        return view('task.smriti',[
            'tasks'=>$tasks,
        ]); // Shows resources/views/task/smriti.blade.php
    }
    public function index()
{
    $completedTasks = ModelsTask::where('completed', true)->get();
    $incompleteTasks = ModelsTask::where('completed', false)->get();
    return view('task.index',[
        'completedTasks' => $completedTasks,
        'incompleteTasks' => $incompleteTasks,
    ]); // Shows resources/views/task/index.blade.php
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
    //   return "Your data has been stored in databases.";
        return redirect('/task')->with('success', 'Task created successfully!');
   
        //return dd($task);
        // ->with('success', 'Task created!');
    }
    public function markComplete($id)
    {
        $task = ModelsTask::findOrFail($id);
        $task->completed = true;
        $task->save();
    
        return redirect('/task')->with('success', 'Task marked as complete!');
    }
    
    

}