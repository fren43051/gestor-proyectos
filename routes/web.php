<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

// Página de inicio → lista de proyectos usando el controlador
Route::get('/', [ProyectoController::class, 'index'])->name('home');

// Ruta para generar PDF de proyectos
Route::get('proyectos/pdf', [ProyectoController::class, 'generarPDF'])->name('proyectos.pdf');

// Rutas CRUD para proyectos
Route::resource('proyectos', ProyectoController::class);
