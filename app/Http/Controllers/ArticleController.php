<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use Illuminate\Pagination\Paginator;

use App\Http\Requests\ArticleRequest;
use App\Models\Menu;
use App\Library\Helpers;

class ArticleController extends Controller
{
    public function newArticlePage($category, $podcategory){

        return view('new_article', ['category' => $category, 'podcategory' => $podcategory]);
    }
    public function addArticle(ArticleRequest $arr){
        
        $article = new Article();
        $article -> name = $arr -> input('name');
        $article -> link = Helpers::TranscriptionHelpers($arr -> input('name'));
        $article -> description = $arr -> input('description');
        #Важно при добавлении тегов обратиться к таблице тегов и проверить наличие их там,
        #если их там нет, то добавить, если есть, то увеличить счетчик на один
        $article -> tags = $arr -> input('tags');###########################################ДОПИСАТЬ
        $article -> text = $arr -> input('htmlcontent');
        $article -> category = $arr -> input('category')."&".$arr -> input('podcategory');
        $name_foto = $arr -> file('foto')->store('/image_content', 'public');
        $article -> foto = $name_foto;
        $article -> visible = 1;
        $article -> popular = 0;

        $article -> date_old_comment = date('Y-m-d H:i:s', time());

        $article -> save();
        return redirect() -> route('welcome') -> with('success', 'Страница создана');
    }

    public function pageSubcategory($name_subcategory)
    {
        Paginator::useBootstrap();
        $menu = new Menu();
        $data_subcategory = $menu -> where('value_category', '=', $name_subcategory) -> get();
        $article = new Article();
        $data_article = $article -> where('category', 'LIKE', '%'.$name_subcategory.'%') -> get() -> paginate(18);
        return view('page_article_category', ['data_subc' => $data_subcategory, 'data_article' => $data_article]);
    }

    public function allArticle()
    {

    }
}
