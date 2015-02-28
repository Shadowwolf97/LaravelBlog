<?php namespace App\Http\Controllers;

use Config;

class SetupController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Setup Controller
	|--------------------------------------------------------------------------
	|
	| Controller to guide the setup process.
	|
	*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(!Config::get('blog.configured', true))
            return view('setup/index');
        else
            App::abort(404);
	}

}
