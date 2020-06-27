<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
	public function getIndex($url = 'kontakti') {
		$obj_1 = Category::where('alias', $url)->first();
 		return view('contact', compact('obj_1'));
    }
}
