<?php

 class PostController extends BaseController 
 {

 	public function getShow($slug) 
 	{
 		$post = Post::where('slug', '=', $slug)->first();
 		return View::make('posts.show')->with('post', $post);
 	}

 	public function getCreateBlogPost()  
 	{
 		return View::make('posts.create');
 	}


    public function slugify($text)
    { 
      // replace non letter or digits by -
      $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

      // trim
      $text = trim($text, '-');

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // lowercase
      $text = strtolower($text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      if (empty($text))
      {
        return 'n-a';
      }

      return $text;
    }

 	public function postCreateBlogPost() 
 	{      
         $validator =  Validator::make(Input::all(), 
            array(
                    'blog_post_title' => 'required|max:200',
                    'blog_post_body'  => 'required'
                 )
            );

         if($validator->fails()) {
            return Redirect::route('post-create-blog-post')->withErrors($validator)->withInput();
         }

         else {
            // create Post 
            $post_title = Input::get('blog_post_title'); 
            $post_slug  = $this->slugify($post_title);
            $post_body  = Input::get('blog_post_body'); 

            $post_draft       = 0;

            $post =  Post::create(array(
         					'title' => $post_title,
         					'slug'  => $post_slug,
         					'draft' => $post_draft,
         					'body'  => $post_body
         					));
            if($post) return Redirect::route('home')->with('global', 'You posted successfully');       
        }

 	}

  
  public function getDelete($slug) 
  {
    $post = Post::where('slug', '=', $slug)->first();
    return View::make('posts.delete')->with('post', $post);
  }

  public function postDelete($id) 
  {
    $post = Post::find($id);
    if($post->delete()) return Redirect::route('home')->with('global', 'post is deleted successfully'); 
  }


  public function getEdit($slug) 
  {
    $post = Post::where('slug', '=', $slug)->first();
    return View::make('posts.edit')->with('post', $post);
  }

  public function postEdit($id) 
  {
    $validator =  Validator::make(Input::all(), 
            array(
                    'edit_post_title' => 'required|max:200',
                    'edit_post_body'  => 'required'
                 )
            );

         if($validator->fails()) {
            return Redirect::route('post-edit-post')->withErrors($validator)->withInput();
         }

         else {
            // update Post
            $post = Post::find($id);

            $post_title = Input::get('edit_post_title'); 
 
            $post->title = $post_title;
            $post->slug  = $this->slugify($post_title);
            $post->body  = Input::get('edit_post_body'); 

            $post->draft = 0;

          if($post->save()) return Redirect::route('post-show', $post->slug)->with('global', 'Your post is updated successfully'); 
        }
  }
    
 
 }