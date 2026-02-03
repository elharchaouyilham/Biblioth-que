<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::view('/register', 'register');
Route::view('/login', 'login');


Route::get('/dashboardb', [BookController::class, 'dashboardb'])->name('dashboardb.index');

Route::get('/dashboardm', [BookController::class, 'index'])->name('dashboardm');

Route::resouùrce('books', BookController::class);

Route::get('/books/search', [BookController::class, 'rechercher'])->name('books.search');
Route::get('/books/modifier', [BookController::class, 'modifier'])->name('books.modifier');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
