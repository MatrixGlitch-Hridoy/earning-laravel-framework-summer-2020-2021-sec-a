<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/login',[LoginController::class,'index'])->name('loginpage');

Route::post('/login',[LoginController::class,'verify'])->name('loginpage');

Route::get('/home',[HomeController::class,'index'])->name('homepage');

Route::get('/register',[LoginController::class,'register'])->name('registerpage');

Route::get('/logout',[LogoutController::class,'index'])->name('logout');

Route::get('/user/create',[UserController::class,'create'])->name('createUser');

Route::get('/user/list',[UserController::class,'list'])->name('userList');

Route::get('/user/details/{id}',[UserController::class,'details']);
Route::get('/user/edit/{id}',[UserController::class,'edit']);
Route::post('/user/edit/{id}',[UserController::class,'update']);
Route::get('/user/delete/{id}',[UserController::class,'delete']);
Route::post('/user/delete/{id}',[UserController::class,'destroy']);



