<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('projects', ProjectController::class)->middleware('auth:api');

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// Route::get('articles', 'App\Http\Controllers\ArticleController@index');
// Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');
// Route::post('articles', 'App\Http\Controllers\ArticleController@store');
// Route::put('articles/{article}', 'App\Http\Controllers\ArticleController@update');
// Route::delete('articles/{article}', 'App\Http\Controllers\ArticleController@delete');
// Route::post('register', 'Auth\RegisterController@register');

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
