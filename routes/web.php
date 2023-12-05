<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('Login/welcome');
});

Route::view('welcome',"Login/welcome")->name('welcome');
Route::view('register',"Login/register")->name('registro');

//vista una vez entrado a la aplicacion
Route::view('PanelUsuario',"Principal/PanelUsuario")->middleware('auth')->name('PanelUsuario');
Route::get("/Pacientes/inicio",[PacienteController::class,"index"])->name("Paciente.index");
Route::get("/Pacientes/carga",[PacienteController::class,"carga"])->name("Pacientes.carga");
Route::POST("/Pacientes/store",[PacienteController::class,"store"])->name("Pacientes.store");


//login
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro'); 
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//FinLogin