<?php

use Illuminate\Http\Request;

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
Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');
// Route::post('login', array('middleware' => 'cors', 'uses' => 'API\UserController@login'));

Route::middleware('auth:api')->group( function () {
    Route::resource('books', 'API\BookController');
});
Route::get('/test', function (Request $request) {
    return response()->json(['Laravel get 6 CORS Example from ItSolutionStuff.com']);
});

Route::post('/test', function (Request $request) {
    return response()->json(['Laravel 6 post CORS Example from ItSolutionStuff.com']);
});
