<?php
namespace App\Providers\FooterComposer;

use Illuminate\Contracts\View\View;
use App\Models\Service;
use App\Models\Post;

class AppComposer {
	public function compose(View $view) {
		$uslugi = Service::where('display', 1)->orderby('order')->get();
		$post = Post::where('display', 1)->orderby('updated_at', 'desc')->get();
		$view->with('uslugi', $uslugi)->with('post', $post);
	}
}