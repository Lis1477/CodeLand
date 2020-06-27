<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;


class ServiceJobController extends Controller
{
	public function getIndex($url = null) {
 		$obj_2 = Service::where('alias', $url)->first();
		$obj_1 = Category::where('alias', 'uslugi')->first();
 		return view('servicejob', compact('obj_2', 'obj_1'));
    }
}
