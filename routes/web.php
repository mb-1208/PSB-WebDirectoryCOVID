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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/admin-input', function () {
    return view('admin');
});

Route::get('/admin-update', function () {
    return view('admin2');
});

Route::get('/login', function () {
    return view('login');
});
