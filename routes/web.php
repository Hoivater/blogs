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


#вывод страницы меню
Route::get('/menu', 'App\Http\Controllers\MenuController@menuPage') -> name('menus');

#вывод страницы тегов
Route::get('/tags', 'App\Http\Controllers\TagsController@tagsPage') -> name('tags');

#вывод страницы со статьями подкатегорий
Route::get('/subcategory/{name_subcategory}', 'App\Http\Controllers\ArticleController@pageSubcategory') -> name('subcategory');


#вывод страницы добавления категории
Route::get('/admin/new_category_page', 'App\Http\Controllers\MenuController@newCategoryPage') -> name('newCategoryPage');

#вывод страницы добавления подкатегории
Route::get('/admin/new_category_page/addPodCategory/{id_kategory}', 'App\Http\Controllers\MenuController@pagePodcategory') -> name('addPodCategory');


#ДОБАВЛЕНИЕ НОВОЙ КАТЕГОРИИ
Route::post('/admin/new_category_page/add_category', 'App\Http\Controllers\MenuController@addCategory') -> name('addCategoryRN');

#ДОБАВЛЕНИЕ НОВОЙ ПОДКАТЕГОРИИ
Route::post('/admin/new_category_page/add_podcategory', 'App\Http\Controllers\MenuController@addPodcategory') -> name('addPodcategoryRN');

#ДОБАВЛЕНИЕ НОВОЙ СТАТЬИ
Route::post('/admin/add_article', 'App\Http\Controllers\ArticleController@addArticle') -> name('addArticleRN');
