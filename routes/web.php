<?php

use App\Http\Controllers\pasiencontroller;
use App\Http\Controllers\periksacontroller;
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
    return view('home');
});
Route::resource("periksa",periksacontroller::class);
Route::resource("pasien",pasiencontroller::class);
