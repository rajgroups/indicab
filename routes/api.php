<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;
use App\Http\Controllers\api\PageController;
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

// Define routes manually for Passport
Route::group(['prefix' => 'oauth'], function () {
    Route::post('token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
    Route::post('tokens/revoke', '\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy');
});

// Public Routes (No authentication required)
Route::post('login', 'AuthController@login'); // Login route for obtaining access token
Route::post('register', 'AuthController@register'); // Register route for new users



// Protected Routes (Requires authentication and valid API key)
Route::middleware(['validate.api_key'])->group(function () {
    // CRUD routes for Post resource
    Route::apiResource('posts', PageController::class);
});
