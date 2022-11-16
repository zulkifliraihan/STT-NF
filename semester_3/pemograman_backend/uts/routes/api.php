<?php

use App\Http\Controllers\PatienController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function(){
    Route::post('login', 'AuthenticationController@login')->name('login');
});

Route::group([
    'as' => 'patiens.',
    'middleware' => [
        'header.accept.json',
        'auth:sanctum'
    ]
], function(){
    Route::get('patiens/search/{name}', 'PatienController@search')->name('search.name');
    Route::get('patiens/status/positive', 'PatienController@positive')->name('search.positive');
    Route::get('patiens/status/recovered', 'PatienController@recovered')->name('search.recovered');
    Route::get('patiens/status/dead', 'PatienController@dead')->name('search.dead');
    Route::resource('patiens', PatienController::class);
});

