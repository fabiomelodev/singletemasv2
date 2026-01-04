<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NicheController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/lp/planos-igreja', [NicheController::class, 'singleChurch'])->name('niche.single-church');

Route::get('/lp/{niche:slug}', [NicheController::class, 'show'])->name('niche.show');

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/single', fn() => view('pages.single-niche.index'));
