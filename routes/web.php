<?php

use Illuminate\Support\Facades\Route;

use App\View\Components\Home\Home;
use App\View\Components\Login\Login;
use App\View\Components\Negocio\Negocio;
use App\View\Components\Negocio\NegocioForm;
use App\View\Components\Proveedor\Proveedor;
use App\View\Components\Cliente\Cliente;


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NegocioController;

Route::get("/", [Home::class,'render'])->name('home');
Route::get("/login", [Login::class,'render'])->name('login');


Route::post("/login.crear", [UsuarioController::class,'crear'])->name('login-crear');
Route::post("/login.entrar", [UsuarioController::class,'ingresar'])->name('login-ingresar');

//Vistas
Route::get("/negocio", [Negocio::class,'render'])->name('negocio');
Route::get("/negocio/form", [NegocioForm::class,'render'])->name('negocio-create');
Route::get("/negocio/form/{id}", [NegocioForm::class,'render'])->name('negocio-edit');
//Controladores
Route::post("/negocio.crear", [NegocioController::class,'crear'])->name('negocio-crear');
Route::put("/negocio.actualizar", [NegocioController::class,'actualizar'])->name('negocio-edit');


Route::get("/proveedor", [Proveedor::class,'render'])->name('proveedor');

Route::get("/cliente", [Proveedor::class,'render'])->name('cliente');