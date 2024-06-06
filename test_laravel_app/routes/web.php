<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [welcomeController::class, 'sayHello']);
Route::get('/course', [welcomeController::class, 'course']);
Route::get('/dashboard',[dashboardController::class, 'dashboard']);
// Route::get('/hello',function(){
//     return "Hello world";
// });
