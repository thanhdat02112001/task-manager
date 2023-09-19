<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::post('/todo/save', [TodoController::class, 'save'])->name('todo.save');
    Route::get('/myday', [TodoController::class, 'index'])->name('todo.index');
    Route::get('/todo/{id}', [TodoController::class, 'show'])->name('todo.show');
    Route::put('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');

    Route::post('/step/save', [StepController::class, 'save'])->name('step.save');
    Route::delete('/step/delete/{id}', [StepController::class, 'delete'])->name('step.delete');
});

