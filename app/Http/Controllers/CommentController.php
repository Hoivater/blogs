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

    public function pageAdminComment()
    {
        Paginator::useBootstrap();
        $comment = new Comment();
        $data = $comment -> orderBy('id', 'desc') -> paginate(50);
        return view('page_admin_comment', ['data' => $data]);
    }
    public function deleteComment($id)
    {
        $comment = new Comment();
        $comment -> delete($id);
        // return redirect() -> route('admin_comments') -> with("success", "Комментарий успешно удален");
    }   
}
