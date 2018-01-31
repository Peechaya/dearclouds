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

	public function showSubtitles()
	{
		$subtitles = DB::table('subtitles')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('translations', compact('subtitles'));
	}

	public function showCats()
	{
		$cats = DB::table('cats')
		->orderBy('created_at', 'desc')
		->paginate(6);

			return View::make('fosterfamily', compact('cats'));
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
