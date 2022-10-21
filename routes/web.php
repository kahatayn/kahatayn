<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('master');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('login', [VolunteerController::class, 'login'])->name('login');
Route::post('custom-login', [VolunteerController::class, 'volunteers'])->name('volunteers');
Route::get('volunteers', [VolunteerController::class, 'index'])->name('volunteers');
Route::post('/users/authenticate', [VolunteerController::class, 'authenticate']);