<?php

class ProfileController extends BaseController {

	public function getUserProfile($username) {

		 $user = User::where('username', '=', $username);

		if($user->count()) {
		 	 $user = $user->first();

			return View::make('search.anyuser')->with('user', $user);
		}

	     //App::Abort(404);

	}

}
