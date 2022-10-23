<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
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
    return view('index');
});

// Route::get('user_events', [EventController::class, 'view']);

Route::get('events', [EventController::class, 'view']);
// Route::get('events', function () {
//     return view('Events');
// });


// Route::get('event/{id}', [EventController::class, 'eventView']);
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

###########
#REGISTRATION
##########

//show register/create form
Route::get(
    '/register',
    [VolunteerController::class, 'create']
)->middleware('guest');

//create new user
Route::post('/volunteers', [VolunteerController::class, 'store']);

//log user out
Route::get(
    '/logout',
    [VolunteerController::class, 'logout']
)->middleware('auth');

// //show log in form
Route::get(
    '/login',
    [VolunteerController::class, 'login']
)->name('login')->middleware('guest');
// Route::get('login', [VolunteerController::class, 'login'])->name('login');
// Route::post('/users/authenticate', [VolunteerController::class, 'authenticate']);

// //login user

Route::post('/users/authenticate', [VolunteerController::class, 'authenticate']);

Route::get('/profile', [VolunteerController::class, 'profile'])->middleware('auth');

Route::get('eventDescription/{id}', [VolunteerController::class, 'eventDescription']);

// //donation

Route::get('donate', function () {
    return view('donate');
});
Route::get('visa', function () {
    return view('visa');
});
Route::get('donate', [DonationController::class, 'show']);
Route::post('create', [DonationController::class, 'store']);
