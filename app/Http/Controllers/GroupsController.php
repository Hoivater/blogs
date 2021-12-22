<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class GroupsController extends Controller
{

	public function groupPage()
	{
		$group = new Groups();
		$data = $group -> orderBy('id', 'desc') -> get();
		return view('group_page', ['data' => $data]);
	}
}
