<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Middleware;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);


Route::get('/task/smriti', [TaskController::class, 'smritiMethod'])->name('task.smriti');
Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}/complete', [TaskController::class, 'markComplete'])->name('task.complete');