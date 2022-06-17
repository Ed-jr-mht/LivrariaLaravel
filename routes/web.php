<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EditoraController;

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

//LIVROS

Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');

Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');

Route::get('/livros/{id}', [LivroController::class, 'show'])->name('livros.show');

Route::delete('/livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');

Route::get('/livros/edit/{id}', [LivroController::class, 'edit'])->name('livros.edit');

Route::put('/livros/{id}', [LivroController::class, 'update'])->name('livros.update');

Route::put('/livros/search', [LivroController::class, 'search'])->name('livros.search');



//AUTORS

Route::get('/autors', [AutorController::class, 'index'])->name('autors.index');

Route::get('/autors/create', [AutorController::class, 'create'])->name('autors.create');

Route::post('/autors', [AutorController::class, 'store'])->name('autors.store');

Route::get('/autors/{id}', [AutorController::class, 'show'])->name('autors.show');

Route::delete('/autors/{id}', [AutorController::class, 'destroy'])->name('autors.destroy');

Route::get('/autors/edit/{id}', [AutorController::class, 'edit'])->name('autors.edit');

Route::put('/autors/{id}', [AutorController::class, 'update'])->name('autors.update');

//EDITORA

Route::get('/editoras',[EditoraController::class, 'index'])->name('editoras.index');

Route::get('/editoras/create', [EditoraController::class, 'create'])->name('editoras.create');

Route::post('/editoras', [EditoraController::class, 'store'])->name('editoras.store');

Route::get('/editoras/{id}', [EditoraController::class, 'show'])->name('editoras.show');

Route::delete('/editoras/{id}', [EditoraController::class, 'destroy'])->name('editoras.destroy');

Route::get('/editoras/edit/{id}', [EditoraController::class, 'edit'])->name('editoras.edit');

Route::put('/editoras/{id}', [EditoraController::class, 'update'])->name('editoras.update');

//MIDIA

Route::resource('midias', MidiaController::class);
