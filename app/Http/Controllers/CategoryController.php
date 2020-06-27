<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
	public function getIndex($url=null) {
		$obj_1 = Category::where('alias', $url)->first();
   		if (!$obj_1) {
    		abort(404);
    	} else {
 			return view('category', compact('obj_1'));
 		}
    }
}
