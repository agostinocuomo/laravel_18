<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Article;
use App\Http\Controllers\ControllerArticle;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('articoli', [ControllerArticle::class, 'show'])->name('lista');

Route::get('/Aggiungi_Articolo',[ControllerArticle::class, 'create'])->name('aggiungi');

Route::get('modifica/{article}',[ControllerArticle::class, 'modifica'])->name('modifica');


/* Route::resource('products', ControllerArticle::class); */
