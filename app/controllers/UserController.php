<?php

class UserController extends BaseController {

	public function userProfile() {
       return View::make('profile', array('user' => Auth::user()));
	}

     public function updateAvatar() {


	}

}
