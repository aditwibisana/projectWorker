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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/resume', 'ResumeController@resume');
Route::get('/halamanlogin', 'ResumeController@halamanlogin')->name('login');
Route::post('/postlogin', 'ResumeController@postlogin');
Route::get('/dashboard', 'DashboardController@dashboard')->middleware('auth');
Route::post('/resume/create', 'DashboardController@create')->middleware('auth');
Route::get('/logout', 'ResumeController@logout');
Route::get('/kontak', 'ResumeController@kontak');
Route::post('/kontak/create', 'ResumeController@create_krisar');
Route::get('/project', 'ProjectController@index');
Route::get('/portofolio', 'DashboardController@portofolio')->middleware('auth');
Route::post('/project/create', 'ProjectController@create')->middleware('auth');
Route::get('/laporan', 'DashboardController@laporan')->middleware('auth');
