<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/tasks/create', [TodoController::class, 'create'])->name('task.create');
    Route::get('tasks/search', [TodoController::class, 'search'])->name('tasks.search');
    Route::get('/tasks', [TodoController::class, 'index'])->name('tasks.index');


    Route::get('/tasks/{todotask}', [TodoController::class, 'show'])->name('task.show');
    Route::get('/tasks/{todotask}/edit', [TodoController::class, 'edit'])->name('tasks.edit');
    Route::put('tasks/{todotask}', [TodoController::class, 'update'])->name('tasks.update');



    Route::post('/tasks', [TodoController::class, 'store'])->name('tasks.store');


    Route::put('/tasks/{id}', [TodoController::class, 'update'])->name('tasks.update');
    Route::delete('tasks/{todotask}',[TodoController::class, 'destroy'])->name('tasks.destroy');
//why am using {todotask} directly instead of id , is because in the controller i called the todotask from
//the model directly , this way it doesn't have to worry about getting id

});






Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
    Route::post('register', [AuthController::class, 'store'])->name('register.store');
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
