<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostItemController extends Controller
{
 	public function getIndex($url = null) {
 		$obj_2 = Post::where('alias', $url)->first();
		$obj_1 = Category::where('alias', 'blog')->first();
 		return view('servicejob', compact('obj_2', 'obj_1'));
    }
}
