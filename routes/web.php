<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/doregister',[HomeController::class,'doregister'])->name('doregister');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/dologin',[HomeController::class,'dologin'])->name('dologin');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
