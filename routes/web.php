<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrinciController;
use App\Http\Controllers\CreyentesController;
use App\Http\Controllers\Mapatroller;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\OvnisController;
use App\Http\Controllers\ParanormalController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/princi', function () {
    return view('princi');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/creyentes', function () {
        return view('creyentes');
    })->name('creyentes');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/mapa', function () {
        return view('mapa');
    })->name('mapa');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/otros', function () {
        return view('otros');
    })->name('otros');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/ovnis', function () {
        return view('ovnis');
    })->name('ovnis');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/paranormal', function () {
        return view('paranormal');
    })->name('paranormal');
});