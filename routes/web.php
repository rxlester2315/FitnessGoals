<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'authlog']);
Route::get('/register',[RegisterController::class,'authregister']);