<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontdeskcontroller;







Route::get('/login',[LoginController::class,'authlog']);
Route::get('/register',[RegisterController::class,'authregister']);

Route::post('/storgister',[RegisterController::class,'registerStore'])->name('accountregister');

Route::get('/members',[LoginController::class,'memberview']);

Route::get('/Frontdesk',[LoginController::class,'frontdeskview']);



Route::post('/login',[LoginController::class,'auth'])->name('store.logins');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




// Member


Route::get('/cardios',[HomeController::class,'cardio']);
Route::get('/yogas',[HomeController::class,'yogaa']);
Route::get('/pilates',[HomeController::class,'pilate']);
Route::get('/trainstrengths',[HomeController::class,'strength']);
Route::get('/zumba',[HomeController::class,'zumbas']);


// coach
Route::get('/listcoach',[HomeController::class,'coaches']);

// profile

Route::get('/myprofile',[HomeController::class,'profile']);

// ernoll
Route::get('/enrollstrength',[HomeController::class,'enrollstrengthview']);
Route::post('/subscrip_coach',[HomeController::class,'enrollstore'])->name('store.subscriptionss');



//enroll list request
Route::get('/enrollclasses',[HomeController::class,'enrolllistview']);



// add coaches

Route::get('/addcoach',[Frontdeskcontroller::class,'coachs']);

// store coach
Route::post('/storez',[Frontdeskcontroller::class,'storecoach'])->name('storecoach');












// lading page

Route::get('/',[HomeController::class,'landings']);