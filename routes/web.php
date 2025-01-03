<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

// Route::get('/', function () {
//     return view('dashboard');
// });
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class,'dashboard']);
Route::get('/user', [HomeController::class,'user']);
Route::get('/hari', [HomeController::class,'hari']);
Route::get('/bulan', [HomeController::class,'bulan']);
