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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




Route::get('/components','FormComponentsController@listAllComponents');//
Route::get('/components/{id}','FormComponentsController@listSingleComponent');
Route::post('/components', 'FormComponentsController@store');
Route::put('/components/update/{id}', 'FormComponentsController@update');
Route::delete('/components/delete/{id}', 'FormComponentsController@softDelete');

Route::get('/listings','JobListingsController@listAllJobs');
Route::get('/listings/{id}','JobListingsController@listSingleJob');
Route::post('/components/create','FormComponentsController@store');//
Route::post('/listings','JobListingsController@store');
Route::put('/listings/update/{id}','JobListingsController@update');
Route::delete('/listings/delete/{id}','JobListingsController@softDelete');
Route::put('listings/close/{id}','JobListingsController@close');

Route::post('users','UsersController@store');
Route::post('users/login','UsersController@login');



