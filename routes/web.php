<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
