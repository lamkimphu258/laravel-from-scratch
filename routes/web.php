<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostsController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

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
    $articles = Article::take(3)->latest()->get();

    return view('index', [
        'articles' => $articles
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('posts/{slug}', [PostsController::class, 'show']);

Route::prefix('/articles')->group(function () {
    Route::get('/create', [ArticlesController::class, 'create']);
    Route::post('/', [ArticlesController::class, 'store']);
    Route::get('/{article}', [ArticlesController::class, 'show'])->name('articles.show');
    Route::get('/{article}/edit', [ArticlesController::class, 'edit']);
    Route::put('/{article}', [ArticlesController::class, 'update']);
    Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');
});
