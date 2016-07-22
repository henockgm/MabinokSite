<?php
// use Illuminate\Http\Request;
// use Image;
// use Auth;

class UserController extends BaseController {

	public function userProfile() {
       return View::make('profile', array('user' => Auth::user()));
	}

     public function updateAvatar(Request $request) {

     if($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename =  time(). '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename ));

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();

     }

	}

}
