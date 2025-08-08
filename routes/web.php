<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('appointment', Appointment::class)->middleware('auth');

// Login para clientes
Route::get('/login/customer', [CustomerController::class, 'showLoginForm'])->name('customer.login');
Route::post('/login/customer', [CustomerController::class, 'login']);

// Login para empleados
Route::get('/login/employee', [EmployeeController::class, 'showLoginForm'])->name('employee.login');
Route::post('/login/employee', [EmployeeController::class, 'login']);