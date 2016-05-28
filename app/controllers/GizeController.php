<?php 

class GizeController extends BaseController {

			public function getUserProfile($username) {

				 $user = User::where('username', '=', $username);

				if($user->count()) {
				 	$user = $user->first();

					return View::make('user.profile')->with('user', $user);				
				}

			     App::Abort(404);
			     
			}

}