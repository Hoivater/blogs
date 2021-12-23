<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Groups;
use Illuminate\Pagination\Paginator;

use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\GroupsController;
use App\Models\Menu;
use App\Models\Tags;
use App\Library\Helpers;

class ArticleController extends Controller
{
    public function newArticlePage($category, $podcategory){

        return view('new_article', ['category' => $category, 'podcategory' => $podcategory]);
    }
    public function addArticle(ArticleRequest $arr){
        
        $article = new Article();
        $article -> name = $arr -> input('name');
        $article -> link = Helpers::TranscriptionHelpers($arr -> input('name'))."_".time();
        $article -> description = $arr -> input('description');
        
        $tags_array = explode(',', $arr -> input('tags'));
        $article -> tags = $this -> AddTagsF($tags_array);
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
        $data_article = $article -> where('category', 'LIKE', '%'.$name_subcategory.'%') -> paginate(18);
        $data_article = $this -> translF($data_article);
        $data_category = $menu -> find($data_subcategory[0] -> podkategory);
        return view('page_article_subcategory', ['data_cat' => $data_category,'data_subc' => $data_subcategory, 'data_article' => $data_article]);
    }
    public function pageCategory($name_category)
    {
        Paginator::useBootstrap();
        $menu = new Menu();
        $data_category = $menu -> where('value_category', '=', $name_category) -> get();
        $article = new Article();

        $data_article = $article -> where('category', 'LIKE', '%'.$name_category.'%') -> paginate(18);
        $data_article = $this -> translF($data_article);
        return view('page_article_category', ['data_cat' => $data_category, 'data_article' => $data_article]);
    }
    public function pageWelcome()
    {
        Paginator::useBootstrap();
        $article = new Article();
        $data_article = $article -> orderBy('id', 'desc') -> paginate(18);
        $data_article = $this -> translF($data_article);    
        return view('welcome', ['data_article' => $data_article]);
    }
    public function articlePage($link_article)
    {
        $article = new Article();
        $data_article = $article -> where('link', '=', $link_article) -> get();

        $data_article = $this -> translF($data_article); 


        return view('page_article', ['data_article' => $data_article[0]]);
    }

    #в стандартный поисковой из бд добаляем нормальные категории и подкатегории
    public function translF($data)
    {
        foreach ($data as $key) {
            $ar = explode("&", $key -> category);
            $key -> key_category = $ar[0];
            $key -> key_subcategory = $ar[1];
            $key -> value_subcategory = $this -> valueFromKeyCategory($ar[1]);
            $key -> value_category = $this -> valueFromKeyCategory($ar[0]);
            #переменные для навигации по группе
            #вперед и назад
            $keyA = $this -> keyAF($key -> id);
            #array(array(key, value), array(key, value), $arr)
        }
        return $data;
    }

    public function keyAF($id)
    {
        $grps = new Groups();
        $data = $grps -> where('id_articles', 'LIKE', '%'.$id.'%') -> get();
        if(isset($data[0]-> id))
        {
            $string = $data[0] -> id_articles;
            $gc = new GroupsController();
            $html_soder = $gc -> htmlGroupF($string, $id);#код содеражания 3-ий элемент массива
        }
        $array_Id_article = explode(",", $data[0] -> id_articles);
        $idA = "";
        $idB = "";
        for($i = 0; $i <= count($array_Id_article)-1; $i++)
        {
            
        }

    }
    #Важно при добавлении тегов обратиться к таблице тегов и проверить наличие их там,
    #если их там нет, то добавить, если есть, то увеличить счетчик на один
    public function AddTagsF($tags_array)
    {
        //dd($tags_array);
        $html_all = "";
        for($i = 0; $i <= count($tags_array)-1; $i++)
        {
            $tags = new Tags();
            $ttranscript = Helpers::TranscriptionHelpers(trim($tags_array[$i]));
            $search = $tags -> where('tags', '=', trim($tags_array[$i])) -> get();
            if(isset($search[0] -> tags))
            {
                $search[0] -> increment('count');
                unset($search);
            }
            else
            {
                $tagis = new Tags();
                $tagis -> tags = trim($tags_array[$i]);
                $tagis -> tags_transcript = $ttranscript;
                $tagis -> count = 1;
                $tagis -> save();
            }
            $html_tegs = "<a href='".route('tagsOne', $ttranscript)."' class='tags'>".trim($tags_array[$i])."</a>";
            $html_all .= " | ".$html_tegs;
            unset($tags);
        }
        

        return $html_all;
    }
    public function valueFromKeyCategory($key)
    {
        $menu = new Menu();
        $data = $menu -> where('value_category', '=', $key) -> get();

        return $data[0] -> name_category;
    }
    public function allArticle()
    {

    }
}
