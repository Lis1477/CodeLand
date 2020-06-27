<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;

class GalleryController extends Controller
{
	public function getIndex($url = 'portfolio') {
		$obj_1 = Category::where('alias', $url)->first();
		$gal = Gallery::where('display', 1)->orderBy('order')->get();
 		return view('gallery', compact('obj_1', 'gal'));
    }
}
