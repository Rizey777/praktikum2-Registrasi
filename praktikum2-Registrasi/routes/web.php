<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/register', 'register');
Route::POST('/submit',[RegisterController::class,'submit']);    
Route::get('/', function () {
    return view('welcome');
});
