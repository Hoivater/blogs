<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Comment;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function addComment(CommentRequest $arr)
    {
        $comment = new Comment();
        $comment -> id_article = $arr -> input('id');
        $comment -> level = $arr -> input('level');
        $comment -> author = $arr -> input('name');
        $comment -> email = $arr -> input('emails');
        $comment -> text = $arr -> input('text');


        $comment -> save();
        return redirect() -> route('articles', $arr -> input('link')) -> with("success", "Комментарий добавлен");
    }   
}
