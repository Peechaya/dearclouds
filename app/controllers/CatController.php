*<?php

class CatController extends BaseController {

	public function index()
	{
		$cats = DB::table('cats')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('cats.index', compact('cats'));
	}



	public function create()
	{
		return View::make('cats.create');
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
			return Redirect::to('cats/create')
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

			$cat = new Cat;
			$cat->title      	= Input::get('title');
			$cat->photo 			= $url;
			$cat->url					= Input::get('url');
			$cat->content			= Input::get('content');
			$cat->user_id 		= Auth::user()->id;
			$cat->categorie   = Input::get('categorie');
			$cat->save();



			// $cat = new Cat;
			// $cat->title      	= Input::get('title');
			// $cat->photo 		= $url;
			// $cat->url			= Input::get('url');
			// $cat->content		= Input::get('content');
			// $cat->user_id 		= Auth::user()->id;
			// $cat->categorie     = Input::get('categorie');
			// $cat->save();

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
		$cat = Cat::find($id);

		return View::make('cats.show', compact('cat'));
	}


	public function edit($id)
	{

		$cat = Cat::find($id);

		if ($cat)
		{
			return View::make('cats.edit')
			->with('cat', $cat);
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
			return Redirect::to('cat/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{
			$cat = Cat::find($id);
			$cat->title       	= Input::get('title');
			if (Input::hasFile('file')) {
				$cat->photo       	= $url;
			}
			$cat->url       		= Input::get('url');
			$cat->content      	= Input::get('content');
			$cat->categorie     = Input::get('categorie');
			$cat->save();

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

		$cat = Cat::find($id);
		$path = $cat->url;

		File::delete(public_path() . '/' . $path);
		$cat->delete();

		return Redirect::to('admin')->with('success', 'Projet supprimé.');
	}



	public function postSearch()
	{
		$results = DB::table('cats');

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

		return View::make('cats.search', compact('results'));
	}



	public function admin()
	{
		$cats = Cat::all();
		return View::make('cats.admin', compact('cats'));
	}





}
