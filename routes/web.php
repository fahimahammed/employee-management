<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", [EmployeeController::class, 'index'])->name('employee.index');
Route::get("/test/search", [EmployeeController::class, 'search'])->name('employee.search');
Route::get("/test/{employeeId}", [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/test/create/data', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/test/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/test/update/{employeeId}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/test/update/{employeeId}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/test/delete/{employeeId}', [EmployeeController::class, 'destroy'])->name('employee.destroy');