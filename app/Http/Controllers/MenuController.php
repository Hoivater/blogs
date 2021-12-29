<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Http\Requests\MenuRequest;

use App\Library\Helpers;

class MenuController extends Controller
{
    public function menuPage()
    {
        $menu = new Menu();
        $data = $menu -> where('podkategory', '=', '0') -> get();
        $data = $this -> resultMenuF($data);
        return view('menu', ['data' => $data]);
    } 

    public function newCategoryPage()
    {
        return view('new_category');
    }

    public function delSubcategory($id)
    {
        $menu = new Menu();

        $menu -> where('value_category', '=', $id) -> delete();
        
        return redirect() -> route('welcome') -> with('success', 'Статья удалена');
    }
    

    public function addCategory(MenuRequest $arr)
    {
        $menu = new Menu();
        $menu -> name_category = $arr -> input('name');
        $menu -> value_category = Helpers::TranscriptionHelpers($arr -> input('name'));
        $name_foto = $arr -> file('foto')->store('/image_menu', 'public'); 
        $menu -> images = $name_foto;
        $menu -> podkategory = 0;
        $menu -> visible = 0;
        $menu -> save();
        return redirect() -> route('menus') -> with('success', 'Категория добавлена');
    }

    public function pagePodcategory($id_kategory)
    {

        return view('new_podcategory', ['id_podkategory' => $id_kategory]);
    }


    public function addPodcategory(Request $arr)
    {   
        $menu = new Menu();
        $menu -> name_category = $arr -> input('name');
        $menu -> value_category = Helpers::TranscriptionHelpers($arr -> input('name'));
        $menu -> images = "no_images";
        $menu -> podkategory = $arr -> input('id_podcategory');
        $menu -> visible = 0;
        $menu -> save();
        return redirect() -> route('menus') -> with('success', 'Подкатегория добавлена');
       
    }

    public function resultMenuF($data)
    {
        $menu = new Menu();
        foreach($data as $key)
        {
            $podkat = $menu -> where('podkategory', '=', $key -> id) -> get();
            $key -> podkategory = $podkat;
        }
        return $data;
    }
}
