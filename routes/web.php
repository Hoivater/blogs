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

Route::get('/', 'App\Http\Controllers\ArticleController@pageWelcome') -> name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#вывод страницы меню
Route::get('/menu', 'App\Http\Controllers\MenuController@menuPage') -> name('menus');

#вывод страницы групп
Route::get('/groups', 'App\Http\Controllers\GroupsController@groupPage') -> name('groups');


#вывод страницы статей соответствующей соответствующему тегу
Route::get('/tags/{tags}', 'App\Http\Controllers\TagsController@tagsPageOne') -> name('tagsOne');

#вывод страницы тегов
Route::get('/tags', 'App\Http\Controllers\TagsController@tagsPage') -> name('tags');

#вывод страницы статьи
Route::get('/article/{link_article}', 'App\Http\Controllers\ArticleController@articlePage') -> name('articles');

#вывод страницы со статьями подкатегорий
Route::get('/subcategory/{name_subcategory}', 'App\Http\Controllers\ArticleController@pageSubcategory') -> name('subcategory');

#вывод страницы со статьями категорий
Route::get('/category/{name_category}', 'App\Http\Controllers\ArticleController@pageCategory') -> name('categoryPage');



#вывод страницы добавления категории
Route::get('/admin/new_category_page', 'App\Http\Controllers\MenuController@newCategoryPage') -> name('newCategoryPage');


#создание новой статьи
Route::get('/admin/new_articles/{category}/{podkategory}',
 'App\Http\Controllers\ArticleController@newArticlePage') -> name('newArticle');

#страница редактирования статьи
Route::get('/admin/redaction_articles/{id}',
 'App\Http\Controllers\ArticleController@redactionArticlePage') -> name('redactionArticle');


#вывод страницы добавления подкатегории
Route::get('/admin/new_category_page/addPodCategory/{id_kategory}', 'App\Http\Controllers\MenuController@pagePodcategory') -> name('addPodCategory');


#ДОБАВЛЕНИЕ НОВОЙ КАТЕГОРИИ
Route::post('/admin/new_category_page/add_category', 'App\Http\Controllers\MenuController@addCategory') -> name('addCategoryRN');


#ДОБАВЛЕНИЕ НОВОГО ИЗОБРАЖЕНИЯ
Route::post('/admin/images/load_image', 'App\Http\Controllers\ImageController@addImage') -> name('addImageRN');

#ДОБАВЛЕНИЕ НОВОЙ ПОДКАТЕГОРИИ
Route::post('/admin/new_category_page/add_podcategory', 'App\Http\Controllers\MenuController@addPodcategory') -> name('addPodcategoryRN');

#РЕДАКТИРОВАНИЕ СТАТЬИ
Route::post('/admin/redaction_article', 'App\Http\Controllers\ArticleController@redactionArticle') -> name('redactionArticleRN');

#ДОБАВЛЕНИЕ ГРУППЫ
Route::post('/admin/add_group', 'App\Http\Controllers\GroupsController@addGroups') -> name('addGroupsRN');

#ДОБАВЛЕНИЕ Статей в группу
Route::post('/admin/add_article_in_groups', 'App\Http\Controllers\GroupsController@addArticleGroups') -> name('addArticleInGroupsRN');

#вывод страницы создания групп
Route::get('/admin/groups', 'App\Http\Controllers\GroupsController@newGroupPage') -> name('newgroups');

#вывод страницы где можно добавить статью в группу
Route::get('/admin/groups/add/{id}', 'App\Http\Controllers\GroupsController@addArticleInGroup') -> name('addArticleGroup');

#вывод страницы с изображениями
Route::get('/admin/images', 'App\Http\Controllers\ImageController@folderImages') -> name('folder_images');

#вывод страницы с изображениями
Route::get('/admin/new_image', 'App\Http\Controllers\ImageController@pageImgLoad') -> name('pageImageLoad');

#ДОБАВЛЕНИЕ НОВОЙ СТАТЬИ
Route::post('/admin/add_article', 'App\Http\Controllers\ArticleController@addArticle') -> name('addArticleRN');
