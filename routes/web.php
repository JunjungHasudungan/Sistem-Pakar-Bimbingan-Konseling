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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');

Route::get('/admin-login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

Route::get('/admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');

Route::resource('/gejala', 'GejalaController');
// ->middleware('auth');
Route::resource('/permasalahan', 'PermasalahanController');
// ->middleware('auth');
Route::resource('relasi', 'relasiController');
// ->middleware('auth');
Route::resource('/bimbingan', 'BimbinganController')
->middleware('auth');
Route::resource('/solusi', 'SolusiController');
// ->middleware('auth');
Route::resource('/konselling', 'KonsellingController');
// ->middleware('auth');
// Route::resource('/bimbingan', 'BimbinganController')->middleware('auth');