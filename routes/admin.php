<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\DocumentController;

Route::get('', [HomeController::class,'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');
/* Route::resource('categorias', CategoriaController::class)->names('categorias'); */
Route::resource('documentos', DocumentController::class)->names('documentos');

Route::resource('users', UserController::class)->only('index','edit','update')->names('users');
