<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tags;

use App\Library\Helpers;


class TagsController extends Controller
{
    public function tagsPage()
    {
        return "Здесь будет страница тегов";
    }
}
