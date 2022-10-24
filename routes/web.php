<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\VolunteerController;
use App\Models\Event;

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
    $allEvent = Event::all();
    return view('index', ['events' => $allEvent]);
});

Route::get('about', function () {
    return view('about');
});
// Route::get('user_events', [EventController::class, 'view']);

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
Route::get('/about', function () {
    return view('about');
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

// //login user

Route::post('/users/authenticate', [VolunteerController::class, 'authenticate']);

Route::get('/profile', [VolunteerController::class, 'profile'])->middleware('auth');

Route::get('/eventDescription/{id}', [VolunteerController::class, 'eventDescription']);


// 
// //donation

Route::get('donate', function () {
    return view('donate');
});
Route::get('visa', function () {
    return view('visa');
});
Route::get('donate', [DonationController::class, 'show']);
Route::post('create', [DonationController::class, 'store']);


//Events
Route::get('/showEvents', [EventController::class, "show"])->name('showEvent');
Route::post('/createEvent', [EventController::class, "store"])->name('createEvent');
Route::get('delete/{id}', [EventController::class, 'destroy'])->name('deleteEvent');
Route::get('update/{id}', [EventController::class, 'update'])->name('updateEvent');
Route::post('/updatedEvent/{id}', [EventController::class, 'updateEvent']);

Route::get('edit/{id}', [VolunteerController::class, 'edit']);
Route::post('update/{id}',  [VolunteerController::class, 'update']);


//Dashboard

Route::get('dashboard', function () {
    return view('dashboard.index');
})->middleware('can:admin');;

Route::get('users', function () {
    return view('dashboard.users');
});

Route::get('admin', function () {
    return view('dashboard.admin');
})->middleware('can:admin');;

//admin views in dashboard
Route::get('events', [EventController::class, 'show'])->middleware('can:admin');;


//view events in inex
Route::get('/show/events', [EventController::class, 'view']);

Route::get('admin/dashboard/add_event', function () {
    return view('Dashboard.AddEventdashboard');
    // ->middleware('can:admin');
})->name('addEvent')->middleware('can:admin');;