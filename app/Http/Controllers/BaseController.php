<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller {
	public function getIndex() {
		$obj = DB::table('main_pages')->first();
		return view('welcome', compact('obj'));
	}
}
