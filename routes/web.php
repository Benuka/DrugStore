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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/pending', function () {
    return view('pending');
});

Route::get('/addnew', function () {
    return view('neworder');
});

Route::get('/addnewdrug', function () {
    return view('addnewdrug');
});
