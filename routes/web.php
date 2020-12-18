<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/tasks',[TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');

Route::post('/tasks/create',[TaskController::class,'store'])->name('tasks.store');
Route::get('/tasks/destroy/{id}',[TaskController::class,'destroy'])->name('tasks.destroy');
Route::get('/tasks/edit/{id}',[TaskController::class,'edit'])->name('tasks.edit');
Route::post('/tasks/edit/{id}',[TaskController::class,'update'])->name('tasks.update');
