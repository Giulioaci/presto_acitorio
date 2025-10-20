<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Rotte pubbliche
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Lista articoli pubblici
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Visualizza singolo articolo
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Articoli per categoria
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

// Ricerca articoli
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

// Cambia lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

/*
|--------------------------------------------------------------------------
| Rotte revisore
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'isRevisor'])->group(function () {
    Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
    Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
    Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
});

// Richiesta di diventare revisore
Route::middleware('auth')->group(function () {
    Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
    Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
});

/*
|--------------------------------------------------------------------------
| Rotte protette (utente loggato)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    // Dashboard utente
    Route::get('/area-personale', [UserController::class, 'dashboard'])->name('user.dashboard');

    // Crea articolo
    Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

    // Mostra solo gli articoli dell’utente loggato
    Route::get('/my-articles', [ArticleController::class, 'myArticles'])->name('article.my');
});





