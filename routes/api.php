<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('plates', 'Api\PlateController', ['only' => ['index', 'show']]);

Route::resource('types', 'Api\TypeController', ['only' => ['index', 'show']]);

Route::resource('restaurants', 'Api\UserController', ['only' => ['index', 'show']]);
