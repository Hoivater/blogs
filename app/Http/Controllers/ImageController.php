<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Library\Helpers;
use Illuminate\Pagination\Paginator;

class ImageController extends Controller
{
    public function folderImages()
    {
        Paginator::useBootstrap();
        $img = new Image();
        $data = $img -> orderBy('id', 'desc') -> paginate(6);
        return view('page_images', ['data' => $data]);
    }

    public function pageImgLoad()
    {
        return view('new_image');
    }

    public function addImage(Request $arr)
    {
        $image = new Image();
        $image -> name = $arr -> input('name');
        
        $name_foto = $arr -> file('foto')->store('/image_articles', 'public'); 
        $image -> link = $name_foto;


        $image -> description = $arr -> input('description');
        $image -> save();
        return redirect() -> route('folder_images') -> with('success', 'Изображение добавлено');
    }
}
