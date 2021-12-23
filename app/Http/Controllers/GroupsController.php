<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Article;

class GroupsController extends Controller
{

	public function groupPage()
	{
		$group = new Groups();
		$data = $group -> orderBy('id', 'desc') -> get();

		$data = $this -> groupsTranslF($data);
		return view('group_page', ['data' => $data]);
	}
	public function newGroupPage()
	{

		return view('new_groups');
	}
	public function addGroups(Request $arr)
	{
		$grps = new Groups();
		$grps -> name_groups = $arr -> input('name');
		$grps -> description = $arr -> input('description');
		$grps -> id_articles = "";
		$grps -> save();

		return redirect()-> route('groups') -> with('success', 'Группа создана');
	}
	public function addArticleInGroup($id)
	{
		Paginator::useBootstrap();
		$grps = new Groups();
		$description_data = $grps -> find($id);
		$article = new Article();
		$data = $article -> select('id', 'name', 'description') -> orderBy('id', 'desc') -> paginate(30);

		return view('add_article_in_groups', ['description_data' => $description_data, 'data' => $data]);
	}

	public function addArticleGroups(Request $arr)
	{
		$grps = new Groups();
		$groupsOne = $grps -> find($arr -> input('id'));
		$groupsOne -> id_articles = $arr -> input('id_articles');
		$groupsOne -> save();
		return redirect()-> route('groups') -> with('success', 'Состав группы обновлен');
	}
	public function groupsTranslF($data)
	{
		#необходимо составить в виде: <li><a href = ""></li>
		foreach ($data as $key) {
				$str = $key ->id_articles;
				if($str != "")
					$key -> id_articles = $this -> htmlGroupF($str, $idsp = '');
		}
		return $data;
	}
	public function htmlGroupF($stringIdGroup, $id)
	{
		$arrayIdGroup = explode(",", $stringIdGroup);
		$result = "";
			$start = "<li><a href = '";
			$center = "'>";
			$end = "</a></li>";
			$startE = "<li><a href = '";
			$centerE = "'><b>";
			$endE = "</b></a></li>";
		for($i = 0; $i <= count($arrayIdGroup)-1; $i++)
		{
			$article = new Article();
			$dataOne = $article -> find((int) $arrayIdGroup[$i]);
			if($arrayIdGroup == $id)
				$res = $startE.route('articles', $dataOne->link).$centerE.$dataOne->name.$endE;	
			else
				$res = $start.route('articles', $dataOne->link).$center.$dataOne->name.$end;
			$result .= $res;
			$res ="";
		}
		return $result;
	}
}
