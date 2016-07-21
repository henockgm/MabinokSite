<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));




Route::get('/contact/contact-us', array(
    'as' => 'contact-contact-us',
    'uses' => 'ContactController@getContactUsForm'
));

Route::get('/contact/contact-me', array(
    'as' => 'contact-contact-me',
    'uses' => 'ContactController@getContactMe'
));


//>>>>>>>>>>>

// Route::get('/gallery/family-photos', array(
//     'as' => 'gallery-family-photos',
//     'uses' => 'GalleryController@getMyGallery'
// ));

// Route::get('/test/test-cv', array(
//   'as' => 'test-my-cv',
//   'uses' => 'TestController@getTest'
// ));


//>>>>>>>>>

Route::get('/portfolio/cv', array(
  'as' => 'portfolio-my-cv',
  'uses' => 'DocumentController@getCV'
));

Route::get('/portfolio/education', array(
  'as' => 'portfolio-certificate',
  'uses' => 'DocumentController@getCertificate'
));


Route::get('/portfolio/references', array(
  'as' => 'portfolio-references',
  'uses' => 'DocumentController@getReferences'
));

Route::get('/portfolio/recent-projects', array(
   'as'=> 'projects-my-works',
   'uses'=>'DocumentController@getMyRecentProjects'
));

Route::get('/portfolio/cover', array(
  'as' => 'portfolio-cover-letter',
  'uses' => 'DocumentController@getMyCoverLetter'
));


//**********************************************************

Route::get('/post/{slug}',  [
  'as' => 'post-show',
  'uses' => 'PostController@getShow'
]);


//***********************************************************


/*
/ Authenticated group
*/
Route::group(array('before' => 'auth'), function() {

    /*
    /   CSRF protection group
   */
    Route::group(array('before' => 'csrf'), function() {

      /*
      / Change password (POST)
      */
      Route::post('/account/change-password', array(
        'as' => 'account-change-password-post',
        'uses' => 'AccountController@postChangePassword'
      ));

      /*
      * update avatar
      */
      Route::post('/profile', array(
        'as' => 'update-avatar',
        'uses' => 'UserController@updateAvatar'
      ));

    });


    /*
    *  admin routes here
    */
    Route::group(array('prefix' => 'admins', 'before' => array('auth|admin')), function() {

        /*
        / Delete Post (GET)
        */
        Route::get('/delete/{slug}',  [
          'as' => 'post-delete',
          'uses' => 'PostController@getDelete'
        ]);

        /*
        / delete post (POST)
        */
        Route::post('/delete/{id}',  [
          'as' => 'post-delete-post',
          'uses' => 'PostController@postDelete'
        ]);

        /*
        / edit post (GET)
        */
        Route::get('/edit/{slug}',  [
          'as' => 'post-edit',
          'uses' => 'PostController@getEdit'
        ]);

        /*
        / edit post (POST)
        */
        Route::post('/edit/{id}',  [
          'as' => 'post-edit-post',
          'uses' => 'PostController@postEdit'
        ]);

    });


    /*
    /  profile
    */
    Route::get('/profile', array(
      'as' => 'profile',
      'uses' => 'UserController@userProfile'
    ));

    /*
    /  show profile(GET)
    */
    Route::get('/user/{username}', [
      'as' => 'show-user-profile',
      'uses' => 'GizeController@getUserProfile'
    ]);

    /*
    / Change password (GET)
    */
    Route::get('/account/change-password', array(
      'as' => 'account-change-password',
      'uses' => 'AccountController@getChangePassword'
      ));


    /*
    / Sign out (GET)
    */
    Route::get('/account/sign-out',  array(
      'as' => 'account-sign-out',
      'uses' => 'AccountController@getSignOut'
    ));

    /*
    / Create Post (GET)
    */
    Route::get('/posts/create', [
      'as' => 'create-blog-post',
      'uses' => 'PostController@getCreateBlogPost'
    ]);

    /*
    / Create Post (POST)
    */
    Route::post('/posts/create', [
      'as' => 'post-create-blog-post',
      'uses' => 'PostController@postCreateBlogPost'
    ]);




});



/*
/ Unauthenticated group
*/
Route::group(array('before' => 'guest'), function() {

    /*
    /   CSRF protection group
   */
    Route::group(array('before' => 'csrf'), function() {

        /*
        /  Create account (POST)
        */
        Route::post('/account/create' , array(
     	    'as' => 'account-create-post',
     	    'uses' => 'AccountController@postCreate'
     	  ));

        /*
        /  Sign In  (POST)
        */
        Route::post('/account/sign-in', array(
          'as' => 'account-sign-in-post',
          'uses' => 'AccountController@postSignIn'
        ));

        /*
       / Forgot password(POST)
       */
       Route::post('/account/forgot-password', array(
          'as' => 'account-forgot-password-post',
          'uses' => 'AccountController@postForgotPassword'
        ));
    });


   /*
   / Forgot password(GET)
   */
   Route::get('/account/forgot-password', array(
      'as' => 'account-forgot-password',
      'uses' => 'AccountController@getForgotPassword'
    ));

   /*
   / Recover(GET)
   */
   Route::get('account/recover/{code}', array(
    'as' => 'account-recover',
    'uses' => 'AccountController@getRecover'
  ));

  /*
  /  Sign In  (GET)
  */
    Route::get('/account/sign-in', array(
      'as' => 'account-sign-in',
      'uses' => 'AccountController@getSignIn'
    ));


    /*
    /  Create account (GET)
    */
    Route::get('/account/create' , array(
     	'as' => 'account-create',
     	'uses' => 'AccountController@getCreate'
     ));


    /*
    /  Activate account
    */
    Route::get('account/activate/{code}', array(
      'as' => 'account-activate',
      'uses' => 'AccountController@getActivate'
    ));

});
