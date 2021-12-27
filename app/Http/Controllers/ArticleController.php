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
    public function redactionArticlePage($id){
        $article = new Article();
        $data = $article -> find($id);
        $data_category = explode("&", $data -> category);
        $category = $data_category[0];
        $podcategory = $data_category[1];
        return view('redaction_article', ['category' => $category, 'podcategory' => $podcategory, 'data' => $data]);
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

    public function redactionArticle(Request $arr){
        
        $article = new Article();
        $art = $article -> find($arr -> input('id_article'));

        $art -> name = $arr -> input('name');


        $art -> description = $arr -> input('description');
        
        if($arr -> input('tags') != ""){
            $tags_array = explode(',', $arr -> input('tags'));
            $art -> tags = $this -> AddTagsF($tags_array);
        }

        $art -> text = $arr -> input('text');

        $art -> category = $arr -> input('category')."&".$arr -> input('podcategory');
        
        $art -> save();
        return redirect() -> route('articles', $art -> link) -> with('success', 'Страница изменена');
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
        $grps = new Groups();
        $search = $grps -> where('id_articles', 'LIKE', '%'.$data_article[0] -> link.'%') -> get();
        if(isset($search[0] -> id))
        {
            $data_article = $this -> translOneF($data_article);
            $result = $data_article[0]; 
        }
        else
        {
            $data_article = $this -> translF($data_article);
            $result = $data_article[0]; 
        }
        return view('page_article', ['data_article' => $result]);
    }
    public function translOneF($data)
    {
             foreach ($data as $key) {
                $ar = explode("&", $key -> category);
                $key -> key_category = $ar[0];
                $key -> key_subcategory = $ar[1];
                $key -> value_subcategory = $this -> valueFromKeyCategory($ar[1]);
                $key -> value_category = $this -> valueFromKeyCategory($ar[0]);
                #переменные для навигации по группе
                #вперед и назад
                $keyA = $this -> keyAF($key -> link);
                
                #array(array(key, value), array(key, value), $arr)
                if(is_array($keyA))
                {
                    $key -> keyA = $keyA[0][0];
                    $key -> valueA = $keyA[0][1];
                    $key -> keyB = $keyA[1][0];
                    $key -> valueB = $keyA[1][1];
                    $key -> html_soder = $keyA[2];
                    $key -> navi = true;
                }

        }
        return $data;
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
            $idreal = $this -> realIdF($id);
            $html_soder = $gc -> htmlGroupF($string, $idreal);#код содеражания 3-ий элемент массива
        }

        $array_Id_article = explode(",", $data[0] -> id_articles);
        for($j = 0; $j <= count($array_Id_article)-1;$j++)
        {
            $array_Id_article[$j] = trim($array_Id_article[$j]);
        }
        $idA = "";
        $idB = "";
        for($i = 0; $i <= count($array_Id_article)-1; $i++)
        {
            if($array_Id_article[$i] == $id)
            {
                if($i >= 1)
                {
                    $idA = $array_Id_article[$i - 1];
                    if($i == count($array_Id_article)-1)
                    {

                        $idB = $array_Id_article[0];
                    }
                    else
                    {
                        $idB = $array_Id_article[$i+1];
                    }
                }
                else
                {
                    $idA = $array_Id_article[count($array_Id_article)-1];
                    $idB = $array_Id_article[$i+1];
                }
            }

        }
        $idA = $this -> realIdF($idA);
        $idB = $this -> realIdF($idB);


        $article = new Article();
        $dataA = $article -> find($idA);
        $dataB = $article -> find($idB);

        $valueA = $dataA -> name;
        $keyA =  $dataA -> link;
        $valueB = $dataB -> name;
        $keyB =  $dataB -> link;
        unset($article);
        $ar = [[$keyA, $valueA], [$keyB, $valueB], $html_soder];

        return $ar;

    }
    public function realIdF($link)
    {
        $article = new Article();
        $data = $article -> where('link', '=', trim($link)) -> get();
        return $data[0] -> id;
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
