<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        // Rotta per gli utenti registrati (UR)
        // Route::get('/', 'HomeController@index')->name('home');
        Route::redirect('/', 'admin/profile');
        Route::resource('profile', 'ProfileController')->only('index', 'edit', 'update', 'destroy');
        Route::resource('plates', 'PlateController');
    });

// Rotta per i visitatori (UI)
Route::get('/home', function () {
    return view('guests.home');
});
