<?php

class FosterController extends BaseController {

	public function index()
	{
		$fosters = DB::table('fosters')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('fosters.index', compact('fosters'));
	}



	public function create()
	{
		return View::make('fosters.create');
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
			return Redirect::to('fosters/create')
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

			$foster = new Foster;
			$foster->title      	= Input::get('title');
			$foster->photo 			= $url;
			$foster->url					= Input::get('url');
			$foster->content			= Input::get('content');
			$foster->user_id 		= Auth::user()->id;
			$foster->categorie   = Input::get('categorie');
			$foster->save();



			// $foster = new Foster;
			// $foster->title      	= Input::get('title');
			// $foster->photo 		= $url;
			// $foster->url			= Input::get('url');
			// $foster->content		= Input::get('content');
			// $foster->user_id 		= Auth::user()->id;
			// $foster->categorie     = Input::get('categorie');
			// $foster->save();

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
		$foster = Foster::find($id);

		return View::make('fosters.show', compact('foster'));
	}


	public function edit($id)
	{

		$foster = Foster::find($id);

		if ($foster)
		{
			return View::make('fosters.edit')
			->with('foster', $foster);
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
			return Redirect::to('foster/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{
			$foster = Foster::find($id);
			$foster->title       	= Input::get('title');
			if (Input::hasFile('file')) {
				$foster->photo       	= $url;
			}
			$foster->url       		= Input::get('url');
			$foster->content      	= Input::get('content');
			$foster->categorie     = Input::get('categorie');
			$foster->save();

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

		$foster = Foster::find($id);
		$path = $foster->url;

		File::delete(public_path() . '/' . $path);
		$foster->delete();

		return Redirect::to('admin')->with('success', 'Projet supprimé.');
	}



	public function postSearch()
	{
		$results = DB::table('fosters');

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

		return View::make('fosters.search', compact('results'));
	}



	public function admin()
	{
		$fosters = Foster::all();
		return View::make('fosters.admin', compact('fosters'));
	}





}
