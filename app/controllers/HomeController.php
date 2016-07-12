<?php

class HomeController extends BaseController {

	public function home() {

		return View::make('home', [

			'posts' => Post::orderBy('created_at', 'DESC')->paginate(6)
		]);

		//$posts = Post::where('draft', '=' ,  0)->get();
		//return View::make('home')->with('posts', $posts);

	}

}
