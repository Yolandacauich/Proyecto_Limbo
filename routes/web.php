<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrinciController;
<<<<<<< HEAD

=======
use App\Http\Controllers\CreyentesController;
use App\Http\Controllers\Mapatroller;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\LugaresEoController;
use App\Http\Controllers\ParanormalController;
use App\Http\Controllers\PublicarController;
use App\Http\Controllers\HistoriaController;
use App\Models\Historia;
use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Http\Livewire\CardShow;
use App\Http\Livewire\HistoriaIndividual;
>>>>>>> f314111f87a661e2184efbb763f53be1b13320aa
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

Route::get('/historia-individual',HistoriaIndividual::class);
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
<<<<<<< HEAD
=======

>>>>>>> f314111f87a661e2184efbb763f53be1b13320aa
Route::get('/princi', function () {
    return view('princi');
});

<<<<<<< HEAD
=======

Route::get('/historia/{id}', function ($id) {
    session(['historia_id' => $id]);
    return view('historia');
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
    Route::get('/paranormal', function () {
        return view('paranormal');
    })->name('paranormal');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/lugares', function () {
        return view('lugares');
    })->name('lugares');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/publicar', function () {
        return view('publicar');
    })->name('publicar');
});

////////ENVIAR FORMULARIO
Route::get('/publicar/publicarh', 'HistoriaController@showForm')->name('publicar.form');
Route::post('/publicar/publicarh', 'HistoriaController@store')->name('publicar.store');
>>>>>>> f314111f87a661e2184efbb763f53be1b13320aa
