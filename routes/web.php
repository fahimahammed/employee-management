<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", [EmployeeController::class, 'index'])->name('employee.index');
Route::get("/test/{employeeId}", [EmployeeController::class, 'show'])->name('employee.show');
