<?php

use App\Http\Controllers\EventController;
// use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event', function (){
    return view('event.index');
});

Route::resource('event', EventController::class);

// Route::get('/booking', function () {
//     return view('booking.index');
// });

// Route::resource('booking', BookingController::class);
