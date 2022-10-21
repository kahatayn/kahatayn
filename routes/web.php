<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// new route => new controller method => new view 

Route::get('/', function () {
    return view('master');
});

Route::get('/profile', function () {
    return view('profile');
});

###########
#REGISTRATION
##########

//show register/create form
Route::get('/register',
[VolunteerController :: class,'create'])->middleware('guest');

//create new user
Route::post('/volunteers',[VolunteerController :: class,'store']);

//log user out
Route::post('/logout',
[VolunteerController :: class,'logout'])->middleware('auth');

// //show log in form
Route::get('/login',
[VolunteerController :: class,'login'])->name('login')->middleware('guest');
// Route::get('login', [VolunteerController::class, 'login'])->name('login');
// Route::post('/users/authenticate', [VolunteerController::class, 'authenticate']);

// //login user
Route::post('/users/authenticate',[VolunteerController :: class,'authenticate']);