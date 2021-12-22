<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Tags;

use App\Models\Article;

use App\Http\Controllers\ArticleController;
// use App\Models\Menu;

use App\Library\Helpers;


class TagsController extends Controller
{

    public function tagsPage()
    {
        Paginator::useBootstrap();
        $tag = new Tags();
        $data = $tag -> orderBy('count', 'desc') -> paginate(50);
        return view('page_tags', ['data' => $data]);
    }
    public function tagsPageOne($tags)
    {
        Paginator::useBootstrap();
        $tagsr = new Tags();
        $data_tags = $tagsr -> where('tags_transcript', '=', trim($tags)) -> get();
        
        $article = new Article();
        $articleController = new ArticleController();
        $data_article = $article -> where('tags', 'LIKE', '%'.$data_tags[0] -> tags.'%') -> paginate(18);
        $data_article = $articleController -> translF($data_article);
        return view('page_article_tags', ['value_tags' => $data_tags[0] -> tags, 'key_tags' => $tags, 'data_article' => $data_article]);
    }


}
