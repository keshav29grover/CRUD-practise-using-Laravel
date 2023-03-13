<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CompanyController::class, 'index'])->name('companies.index');


Route::resource('companies', CompanyController::class);
Route::resource('employees', EmployeeController::class);