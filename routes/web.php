<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/gejala', 'GejalaController');
// ->middleware('auth');
Route::resource('/permasalahan', 'PermasalahanController');
// ->middleware('auth');
Route::resource('/relasi', 'relasiController');
// ->middleware('auth');
Route::resource('/bimbingan', 'BimbinganController');
// ->middleware('auth');
Route::resource('/solusi', 'SolusiController');
// ->middleware('auth');
Route::resource('/konselling', 'KonsellingController');
// ->middleware('auth');
// Route::resource('/bimbingan', 'BimbinganController')->middleware('auth');