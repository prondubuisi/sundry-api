<?php

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
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/forgot_password', function () {
    return view('auth.forgotPassword');
});
Route::get('/openings', function () {
    return view('allOpenings');
});
Route::get('/updates', function () {
    return view('allUpdates');
});
Route::get('/openings', function () {
    return view('allOpenings');
});
Route::get('/applications', function () {
    return view('applications');
});
Route::get('/create_test', function () {
    return view('createTest');
});
Route::get('/new_opening', function () {
    return view('newOpening');
});
Route::get('/new_update', function () {
    return view('newUpdate');
});
Route::get('/starred', function () {
    return view('starredApplications');
});
Route::get('/tests', function () {
    return view('tests');
});
Route::get('/view_application', function () {
    return view('viewApplication');
});

