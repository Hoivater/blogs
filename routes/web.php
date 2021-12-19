<?php

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
    return view('welcome');
}) -> name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/new_article/{category}/{podkategory}',
 'App\Http\Controllers\ArticleController@newArticlePage') -> name('newArticle');

Route::post('/add', 'App\Http\Controllers\ArticleController@addArticle') -> name('addArticleRN');
