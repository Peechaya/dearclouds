<?php

class SubtitleController extends BaseController {

	public function index()
	{
		$subtitles = DB::table('subtitles')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('subtitles.index', compact('subtitles'));
	}



	public function create()
	{
		return View::make('subtitles.create');
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
			return Redirect::to('subtitles/create')
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

			$subtitle = new Subtitle;
			$subtitle->title      	= Input::get('title');
			$subtitle->photo 			= $url;
			$subtitle->url					= Input::get('url');
			$subtitle->content			= Input::get('content');
			$subtitle->user_id 		= Auth::user()->id;
			$subtitle->categorie   = Input::get('categorie');
			$subtitle->save();



			// $subtitle = new Subtitle;
			// $subtitle->title      	= Input::get('title');
			// $subtitle->photo 		= $url;
			// $subtitle->url			= Input::get('url');
			// $subtitle->content		= Input::get('content');
			// $subtitle->user_id 		= Auth::user()->id;
			// $subtitle->categorie     = Input::get('categorie');
			// $subtitle->save();

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
		$subtitle = Subtitle::find($id);

		return View::make('subtitles.show', compact('subtitle'));
	}


	public function edit($id)
	{

		$subtitle = Subtitle::find($id);

		if ($subtitle)
		{
			return View::make('subtitles.edit')
			->with('subtitle', $subtitle);
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
			return Redirect::to('subtitle/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{
			$subtitle = Subtitle::find($id);
			$subtitle->title       	= Input::get('title');
			if (Input::hasFile('file')) {
				$subtitle->photo       	= $url;
			}
			$subtitle->url       		= Input::get('url');
			$subtitle->content      	= Input::get('content');
			$subtitle->categorie     = Input::get('categorie');
			$subtitle->save();

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

		$subtitle = Subtitle::find($id);
		$path = $subtitle->url;

		File::delete(public_path() . '/' . $path);
		$subtitle->delete();

		return Redirect::to('admin')->with('success', 'Projet supprimé.');
	}



	public function postSearch()
	{
		$results = DB::table('subtitles');

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

		return View::make('subtitles.search', compact('results'));
	}



	public function admin()
	{
		$subtitles = Subtitle::all();
		return View::make('subtitles.admin', compact('subtitles'));
	}





}
