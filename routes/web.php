<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontdeskcontroller;
use App\Http\Controllers\CoachController;









Route::get('/login',[LoginController::class,'authlog']);
Route::get('/register',[RegisterController::class,'authregister']);

Route::post('/storgister',[RegisterController::class,'registerStore'])->name('accountregister');

Route::get('/members',[LoginController::class,'memberview']);

Route::get('/Frontdesk',[LoginController::class,'frontdeskview']);

Route::get('/Coach',[LoginController::class,'coachview']);




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

// ernoll strength 
Route::get('/enrollstrength',[HomeController::class,'enrollstrengthview']);
Route::post('/subscrip_coach',[HomeController::class,'enrollstore'])->name('store.subscriptionss');

// ernoll pilate

Route::get('/enrollpilates',[HomeController::class,'enrollpilate']);

// ernoll zumba
Route::get('/enrollzumbaa',[HomeController::class,'enrollzumba']);

//enroll cardio

Route::get('/enrollcardios',[HomeController::class,'enrollcardio']);








//enroll list request
Route::get('/enrollclasses',[HomeController::class,'enrolllistview']);



// add coaches

Route::get('/addcoach',[Frontdeskcontroller::class,'coachs']);

// store coach
Route::post('/storez',[Frontdeskcontroller::class,'storecoach'])->name('storecoach');




// coach

Route::get('list_clients',[CoachController::class,'clients']);

Route::get('approvesubs/{id}',[CoachController::class,'approvesub']);

Route::get('declinesubs/{id}',[CoachController::class,'declinesub']);


Route::get('schedule_list',[CoachController::class,'schedule']);


Route::get('update_time/{id}', [CoachController::class, 'updatetime'])->name('update_time');

Route::put('updatetimes/{id}',[CoachController::class,'updatetimeBend']);






// lading page

Route::get('/',[HomeController::class,'landings']);