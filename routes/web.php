<?php
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::resource('appointment', AppointmentController::class);

// ->middleware('auth:customer');

// Login para clientes
Route::get('/login/customer', [CustomerController::class, 'showLoginForm'])->name('customer.login');
Route::post('/login/customer', [CustomerController::class, 'login']);
Route::get('/register/customer', [CustomerController::class, 'showRegisterForm'])->name('customer.register');
Route::post('/register/customer', [CustomerController::class, 'register']);

// Login para empleados
Route::get('/login/employee', [EmployeeController::class, 'showLoginForm'])->name('employee.login');
Route::post('/login/employee', [EmployeeController::class, 'login']);