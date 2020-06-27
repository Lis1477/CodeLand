<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;


class GalleryPostController extends Controller
{
	public function getIndex($url = null) {
 		$obj_2 = Gallery::where('alias', $url)->first();
		$obj_1 = Category::where('alias', 'portfolio')->first();
 		return view('gallerypost', compact('obj_2', 'obj_1'));
    }
}
