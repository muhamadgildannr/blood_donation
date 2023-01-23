<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::patch('/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::delete('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

