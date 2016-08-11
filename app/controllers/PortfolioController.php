<?php

class PortfolioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createCover()
	{
		//
		return View::make('portfolio.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeCover()
	{
		//
		$validator =  Validator::make(Input::all(),
            array('cover_body'  => 'required')
            );

         if($validator->fails()) {
            return Redirect::route('create-cover')->withErrors($validator)->withInput();
         }

         else {
            // create Post
            $cover_body  = Input::get('cover_body');

            // if(Auth::check()) {
            //   $user_id = Auth::user()->id;
            // } else  { return Redirect::route('cover-create')->withErrors($validator)->withInput(); }

            $cover = Portfolio::create(array(
         					'cover'  => $cover_body
         					));
            if($cover) return Redirect::route('cover-show')->with('global', 'You create a new cover successfully');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showCover()
	{
		//
		$cover = Portfolio::all()->first();
		return View::make('portfolio.show')->with('cover', $cover);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editCover()
	{
		//
		$cover = Portfolio::where('id', '=', 1)->first();
		return View::make('portfolio.edit')->with('cover', $cover);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateCover()
	{
		//
			$validator =  Validator::make(Input::all(),
            	array('cover_body'  => 'required')
            );

         if($validator->fails()) {
            return Redirect::route('create-cover')->withErrors($validator)->withInput();
         }

         else {
            // create Post
            $cover_body  = Input::get('cover_body');

            // if(Auth::check()) {
            //   $user_id = Auth::user()->id;
            // } else  { return Redirect::route('cover-create')->withErrors($validator)->withInput(); }

            $cover = Portfolio::find(1);

            $cover->cover = $cover_body;

            if($cover->save()) return Redirect::route('cover-show')->with('global', 'You updated cover letter successfully');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
