<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
	public function getIndex($url = 'blog') {
		$obj_1 = Category::where('alias', $url)->first();
		$blog = Post::where('display', 1)->orderby('updated_at', 'desc')->get();
 		return view('post', compact('obj_1', 'blog'));
    }
}
