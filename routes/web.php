<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('Login/welcome');
});
Route::view('welcome',"Login/welcome")->name('welcome');
Route::view('register',"Login/register")->name('registro');


Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro'); 
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');