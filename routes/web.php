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

Route::get('/', function () {   return view('guest.home');   })->name('home');

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
        Route::resource('orders', 'OrderController')->only('index', 'edit', 'update', 'destroy');
    });


    
Route::resource('orders', 'OrderController')->only('create','store'); 

Route::get('menu', 'PlatesController@index')->name('menu');

Route::get('cart', 'PlatesController@cart')->name('cart');

Route::get('add-to-cart/{id}', 'PlatesController@addToCart');

Route::patch('update-cart', 'PlatesController@update');

Route::delete('remove-from-cart', 'PlatesController@remove');

// Rotta di fallback
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');





