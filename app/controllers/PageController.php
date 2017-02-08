<?php

class PageController extends BaseController {

	public function index()
	{
		$pages = DB::table('pages')
		->orderBy('created_at', 'desc')
		->paginate(6);



		return View::make('pages.index', compact('pages'));
	}

	public function create()
	{
		return View::make('pages.create');
	}


	public function store()
	{

		$rules = array(
			'title'   => 'required',
			'content'      => 'required'
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('pages/create')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else {


			$page = new Page;
			$page->title      	= Input::get('title');
			$page->photo 		= Input::get('photo');
			$page->content 		= Input::get('content');
			$page->user_id 		= Auth::user()->id;
			$page->save();

			return Redirect::to('')->with('success', 'Votre page a bien été postée.');
		}
	}


	public function show($id)
	{
		$page = Page::find($id);


		$user = DB::table('users')
		->where('username', '=', $page->username)
		->first();

		return View::make('pages.show', compact('page', 'user'));
	}


	public function edit($id)
	{

		$page = Page::find($id);

		if ($page)
		{
			return View::make('pages.edit')
			->with('page', $page);
		}
		else
		{
			return Redirect::to('')->with('error', 'Vous ne pouvez pas faire ça.');
		}
	}


	public function update($id)
	{
		$rules = array(
			'title'       => 'required',
			'content'      => ''
			);
		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			return Redirect::to('page/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else
		{
			$page = Page::find($id);
			$page->title       	= Input::get('title');
			$page->photo       	= Input::get('photo');
			$page->photo       	= Input::get('photo');
			$page->content      = Input::get('content');
			$page->categorie	= Input::get('categorie');
			$page->save();



			return Redirect::to('')->with('success', 'Votre page a bien été mise à jour.');
		}
	}


	public function destroy($id)
	{

		$page = Page::find($id);
		$path = $page->url;

		File::delete(public_path() . '/' . $path);
		$page->delete();

		return Redirect::to('')->with('success', 'Page supprimée.');
	}



	public function postSearch()
	{
		$results = DB::table('pages');

		if(Input::get('keywords'))
			$results->where('title', 'LIKE', '%' . Input::get('keywords') . '%')
					->orWhere('content', 'LIKE', '%' . Input::get('keywords') . '%');

		if(Input::get('categorie'))
			$results->where('categorie', '=', Input::get('categorie'));

		if(Input::get('departement'))
			$results->where('departement', 'LIKE', '%' . Input::get('departement') . '%');

		if(Input::get('photo'))
			$results->where('photo', '<=', Input::get('photo'));

		$results = $results->get();

		return View::make('pages.search', compact('results'));
	}



	public function admin()
	{
		$pages = Page::all();
		return View::make('pages.admin', compact('pages'));
	}





}
