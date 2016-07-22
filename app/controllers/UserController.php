<?php
//use Illuminate\Http\Request;
//use App\Http\Requests;
//use Auth;
//use Intervention\Image;

class UserController extends BaseController {

	public function userProfile() {
       return View::make('profile', array('user' => Auth::user()));
	}



    /*
    *   Update avatar
    */
    public function updateAvatar() {

      $validator = Validator::make(Input::all(),
            array(
                'avatar' => 'required',
            )
        );

        if($validator->fails()) {
            return Redirect::route('profile')->withErrors($validator)->withInput();

        } else {

            if(Input::hasFile('avatar')) {
                $avatar = Input::file('avatar');
                $filename =  time(). '.' . $avatar->getClientOriginalExtension();
                //Image::make($avatar)->resize(300, 300)->save(URL::to('/uploads/avatars/' . $filename ));
                Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

                $user = Auth::user();
                $user->avatar = $filename;
                $user->save();

             }
         }

     return View::make('profile', array('user' => Auth::user()) );

	}



}
