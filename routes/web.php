<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/homeadmin', function () {
    return view('homeadmin');
});
Route::get('/homemanager', function () {
    return view('homemanager');
});
Route::get('/homemanager', function () {
    return view('homemanager');
});
Route::get('/homemanager', function () {
    return view('homemanager');
});
Route::get('/registro', function () {
    return view('registraruser');
});
Route::get('/registropersonal', function () {
    return view('registermanager');
});
