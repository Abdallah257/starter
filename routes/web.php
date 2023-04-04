<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'index']);

//start Article Page Routes

Route::get('/articles', [ArticleController::class,'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class,'create']);

Route::post('/articles', [ArticleController::class,'store'])->name('articles.store');

Route::get('/articles/{article}', [ArticleController::class,'show']);

Route::get('/articles/{article}/edit', [ArticleController::class,'edit']);

Route::patch('/articles/{article}', [ArticleController::class,'update'])->name('articles.update');

Route::delete('/articles/{article}', [ArticleController::class,'destroy'])->name('articles.destroy');

//end Article Page Routes

Route::get('/categories/{category}', [CategoryController::class,'show']);







