<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		$projects = DB::table('projects')
		->orderBy('created_at', 'desc')
		->paginate(6);

			return View::make('index', compact('projects'));
	}


	public function showWebProjects()
	{
		$projects = DB::table('projects')
		->orderBy('created_at', 'desc')
		->paginate(6);

			return View::make('webprojects', compact('projects'));
	}

	public function showTranslations()
	{
		$projects = DB::table('translations')
		->orderBy('created_at', 'desc')
		->paginate(6);

			return View::make('transkations', compact('projects'));
	}

	public function showFoster()
	{
		$projects = DB::table('fosters')
		->orderBy('created_at', 'desc')
		->paginate(6);

			return View::make('fosterfamily', compact('projects'));
	}

	public function showAdmin()
	{
		$projects = Project::all();
		return View::make('admin', compact('projects'));
	}

	public function showCv()
	{
		$projects = Project::all();
		return View::make('cv', compact('projects'));
	}

	public function showProject($id)
	{
		$project = Project::find($id);

		return View::make('projects.show', compact('project'));
	}

}
