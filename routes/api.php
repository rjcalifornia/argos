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

//Verify if user is authenticated
Route::get('/validate', 'App\Http\Controllers\api\AuthController@restricted')->name('validate');

//Create a new user
Route::post('/register', 'App\Http\Controllers\api\AuthController@register');

//App login
Route::post('/login', 'App\Http\Controllers\api\AuthController@login');

//Insert new data
Route::post('/app/store', 'App\Http\Controllers\ManagementController@storeData')->middleware('auth:api');

//Insert new data without authentication
//Route::post('/app/store', 'App\Http\Controllers\ManagementController@storeData');

//Show all records
Route::apiResource('/ceo', 'App\Http\Controllers\api\CEOController')->middleware('auth:api');

//Return the user details. Requires access token
Route::get('/app/user/details', 'App\Http\Controllers\api\AuthController@userDetails')->middleware('auth:api');

 Route::post('/logout','App\Http\Controllers\api\AuthController@logoutApi')->middleware('auth:api');
 
 Route::get('/app/companies/all','App\Http\Controllers\ManagementController@retrieveStoredData')->middleware('auth:api');

 
