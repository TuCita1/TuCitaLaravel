<?php

use Illuminate\Support\Facades\Route;

use App\View\Components\Home\Home;
use App\View\Components\Login\Login;
use App\View\Components\Negocio\Negocio;
use App\View\Components\Negocio\NegocioForm;
use App\View\Components\Servicio\Servicio;
use App\View\Components\Servicio\ServicioForm;
use App\View\Components\Proveedor\Proveedor;


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\ServicioController;

// Rutas de el componente de login
Route::get("/", [Home::class,'render'])->name('home');
Route::get("/login", [Login::class,'render'])->name('login');

Route::post("/login.crear", [UsuarioController::class,'crear'])->name('login-crear');
Route::post("/login.entrar", [UsuarioController::class,'ingresar'])->name('login-ingresar');

// Rutas de el componente de negocio
//Vistas
Route::get("/negocio", [Negocio::class,'render'])->name('negocio');
Route::get("/negocio/{id}", [NegocioForm::class,'render'])->name('negocio-form');

//Controladores
Route::post("/negocio.crear", [NegocioController::class,'crear'])->name('negocio-crear');
Route::put("/negocio.actualizar", [NegocioController::class,'actualizar'])->name('negocio-editar');
Route::delete('/negocio.eliminar/{id}', [NegocioController::class, 'eliminar'])->name('negocio.eliminar');

// Rutas de el componente de servicio
//Vistas
Route::get("/servicio", [Servicio::class,'render'])->name('servicio');
Route::get("/servicio/{id}", [ServicioForm::class,'render'])->name('servicio-form');

//Controladores
Route::post("/servicio.crear", [ServicioController::class,'crear'])->name('servicio-crear');
Route::put("/servicio.actualizar", [ServicioController::class,'actualizar'])->name('servicio-editar');
Route::delete('/servicio.eliminar/{id}', [ServicioController::class, 'eliminar'])->name('servicio.eliminar');


Route::get("/proveedor", [Proveedor::class,'render'])->name('proveedor');
Route::get("/cliente", [Proveedor::class,'render'])->name('cliente');