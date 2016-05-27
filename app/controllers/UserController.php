<?php 
class UserController extends BaseController {

	public function getUserProfile($username) {

		$user = User::where('username', '=', $username);

		if($user->count()) {
		 	$user = $user->first();

			return View::make('user.profile')
				->with('user', $user);

		}

		return App::abort(404);
	}
}

