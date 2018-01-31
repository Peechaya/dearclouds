<?php

class TranslationController extends BaseController {

	public function index()
	{
		$translations = DB::table('translations')
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('translations.index', compact('translations'));
	}



	public function create()
	{
		return View::make('translations.create');
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
			return Redirect::to('translations/create')
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

			$translation = new Translation;
			$translation->title      	= Input::get('title');
			$translation->photo 			= $url;
			$translation->url					= Input::get('url');
			$translation->content			= Input::get('content');
			$translation->user_id 		= Auth::user()->id;
			$translation->categorie   = Input::get('categorie');
			$translation->save();



			// $translation = new Translation;
			// $translation->title      	= Input::get('title');
			// $translation->photo 		= $url;
			// $translation->url			= Input::get('url');
			// $translation->content		= Input::get('content');
			// $translation->user_id 		= Auth::user()->id;
			// $translation->categorie     = Input::get('categorie');
			// $translation->save();

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
		$translation = Translation::find($id);

		return View::make('translations.show', compact('translation'));
	}


	public function edit($id)
	{

		$translation = Translation::find($id);

		if ($translation)
		{
			return View::make('translations.edit')
			->with('translation', $translation);
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
			return Redirect::to('translation/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{
			$translation = Translation::find($id);
			$translation->title       	= Input::get('title');
			if (Input::hasFile('file')) {
				$translation->photo       	= $url;
			}
			$translation->url       		= Input::get('url');
			$translation->content      	= Input::get('content');
			$translation->categorie     = Input::get('categorie');
			$translation->save();

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

		$translation = Translation::find($id);
		$path = $translation->url;

		File::delete(public_path() . '/' . $path);
		$translation->delete();

		return Redirect::to('admin')->with('success', 'Projet supprimé.');
	}



	public function postSearch()
	{
		$results = DB::table('translations');

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

		return View::make('translations.search', compact('results'));
	}



	public function admin()
	{
		$translations = Translation::all();
		return View::make('translations.admin', compact('translations'));
	}





}
