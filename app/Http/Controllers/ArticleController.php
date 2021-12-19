<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests\tegRequest;
use App\Models\Article;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function newArticlePage($category, $podcategory){

        return view('new_article', ['category' => $category, 'podcategory' => $podcategory]);
    }
    public function addArticle(ArticleRequest $arr){
        // dd($arr);
        $article = new Article();
        $article -> name = $arr -> input('name');
        $article -> link = "LINK";###########################################ДОПИСАТЬ
        $article -> description = $arr -> input('description');
        #Важно при добавлении тегов обратиться к таблице тегов и проверить наличие их там,
        #если их там нет, то добавить, если есть, то увеличить счетчик на один
        $article -> tags = $arr -> input('tags');###########################################ДОПИСАТЬ
        $article -> text = $arr -> input('htmlcontent');
        $article -> category = $arr -> input('category')."&".$arr -> input('podcategory');
        $name_foto = $arr -> file('foto')->store('/user_image');
        $article -> foto = $name_foto;

        $article -> visible = 1;
        $article -> popular = 0;

        $article -> date_old_comment = date('Y-m-d H:i:s', time());

        $article -> save();
        return redirect() -> route('welcome') -> with('success', 'Страница создана');
    }
}
