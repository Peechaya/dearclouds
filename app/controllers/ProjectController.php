<?php

class ProjectController extends BaseController {

	public function index()
	{
		$projects = DB::table('projects')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('projects.index', compact('projects'));
	}

	public function portfolio()
	{
		$projects = DB::table('projects')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('portfolio', compact('projects'));
	}


	public function create()
	{
		return View::make('projects.create');
	}


	public function store()
	{

		$rules = array(
			'title'   => 'required',
			'content'      => 'required',
			// 'photo'	=> 'required',
			// 'file'	=> 'required',
			'name'  => 'unique:uploads',
			'size'  => 'max:10000000',
			'type'	=> 'image/jpeg,image/png,image/gif,image/jpg'
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::to('projects/create')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{

			$file = Input::file('file');
			$destinationPath = 'public/files/';
			$filename = str_random(20);
			$extension = $file->getClientOriginalExtension();
			$type = $file->getMimeType();
			$size = Input::file('file')->getSize();
			$upload_success = Input::file('file')->move($destinationPath, $filename . '.' . $extension);
			$url = 'files/' . $filename . '.' . $extension;

			$project = new Project;
			$project->title      	= Input::get('title');
			$project->photo 			= $url;
			$project->url					= Input::get('url');
			$project->content			= Input::get('content');
			$project->user_id 		= Auth::user()->id;
			$project->categorie   = Input::get('categorie');
			$project->save();



			// $project = new Project;
			// $project->title      	= Input::get('title');
			// $project->photo 		= $url;
			// $project->url			= Input::get('url');
			// $project->content		= Input::get('content');
			// $project->user_id 		= Auth::user()->id;
			// $project->categorie     = Input::get('categorie');
			// $project->save();

			Upload::create([
				'name'       	=> $filename,
				'user_id'    	=> Auth::user()->id,
				'url'        	=> 'files/' . $filename . '.' . $extension,
				'size'			=> $size,
				'extension'   	=> $file->getClientOriginalExtension(),
				'type'			=> $type
				]);


			return Redirect::to('portfolio')->with('success', 'Votre projet a bien été posté.');
		}
	}


	public function show($id)
	{
		$project = Project::find($id);

		return View::make('projects.show', compact('project'));
	}


	public function edit($id)
	{

		$project = Project::find($id);

		if ($project)
		{
			return View::make('projects.edit')
			->with('project', $project);
		}
		else
		{
			return Redirect::to('admin')->with('error', 'Vous ne pouvez pas faire ça.');
		}
	}


	public function update($id)
	{

	if (Input::hasFile('file')) {

		$file = Input::file('file');
		$destinationPath = 'public/files/';
		$filename = str_random(20);
		$extension = $file->getClientOriginalExtension();
		$type = $file->getMimeType();
		$size = Input::file('file')->getSize();
		$upload_success = Input::file('file')->move($destinationPath, $filename . '.' . $extension);
		$url = 'files/' . $filename . '.' . $extension;

}

		$rules = array(
			'title'       => 'required',
			'content'      => ''
			);
		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			return Redirect::to('project/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{
			$project = Project::find($id);
			$project->title       	= Input::get('title');
			if (Input::hasFile('file')) {
				$project->photo       	= $url;
			}
			$project->url       		= Input::get('url');
			$project->content      	= Input::get('content');
			$project->categorie     = Input::get('categorie');
			$project->save();

if (Input::hasFile('file')) {
			Upload::create([
				'name'       	=> $filename,
				'user_id'    	=> Auth::user()->id,
				'url'        	=> 'files/' . $filename . '.' . $extension,
				'size'			=> $size,
				'extension'   	=> $file->getClientOriginalExtension(),
				'type'			=> $type
				]);
			}



			return Redirect::to('admin')->with('success', 'Votre projet a bien été mis à jour.');
		}
	}


	public function destroy($id)
	{

		$project = Project::find($id);
		$path = $project->url;

		File::delete(public_path() . '/' . $path);
		$project->delete();

		return Redirect::to('admin')->with('success', 'Projet supprimé.');
	}



	public function postSearch()
	{
		$results = DB::table('projects');

		if(Input::get('keywords'))
			$results->where('title', 'LIKE', '%' . Input::get('keywords') . '%')
		->orWhere('description', 'LIKE', '%' . Input::get('keywords') . '%');

		if(Input::get('categorie'))
			$results->where('categorie', '=', Input::get('categorie'));

		// if(Input::get('departement'))
		// 	$results->where('departement', 'LIKE', '%' . Input::get('departement') . '%');

		// if(Input::get('price'))
		// 	$results->where('price', '<=', Input::get('price'));

		$results = $results->get();

		return View::make('projects.search', compact('results'));
	}



	public function admin()
	{
		$projects = Project::all();
		return View::make('projects.admin', compact('projects'));
	}





}
