<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Article;
use App\Http\Controllers\ArticleController;

Auth::routes();
Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');
