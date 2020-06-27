<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;


class ServiceController extends Controller 
{
	public function getIndex($url = 'uslugi') {
		$obj_1 = Category::where('alias', $url)->first();
		$srv = Service::where('display', 1)->orderby('order')->get();
 		return view('service', compact('obj_1', 'srv'));
    }
}
