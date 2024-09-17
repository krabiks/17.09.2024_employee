<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {return view('welcome');});

//Route::get('/employee', [NoteController::class, 'index'])->name('employee.index');
//Route::get('/employee/create', [NoteController::class, 'cerate'])->name('employee.create');
//Route::post('/employee', [NoteController::class, 'store'])->name('employee.store');
//Route::get('/employee/{id}', [NoteController::class, 'show'])->name('employee.show');
//Route::get('/employee/{id}/edit', [NoteController::class, 'edit'])->name('employee.');

Route::resource('employees', EmployeeController::class);



