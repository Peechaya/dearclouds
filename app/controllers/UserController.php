<?php

class UserController extends BaseController {


	public function index()
	{
		$users = User::all();

		return View::make('users.index')
		->with('users', $users);
	}


	public function create()
	{
		return View::make('users.create');
	}


	public function store()
	{

		$rules = array(
			'username'   => 'required|unique:users',
			'email'      => 'required|email|unique:users',
			'password'   => 'required|min:4',
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('users/create')
			->withErrors($validator)
			->withInput(Input::except('password'));
		} else {

			$code = str_random(60);

			$user = new User;
			$user->username      = Input::get('username');
			$user->email      	 = Input::get('email');
			$user->password 	 = Hash::make(Input::get('password'));
			$user->save();


			return Redirect::to('')->with('success', 'Vous êtes désormais inscrit. Veuillez activer votre compte par mail.');
		}
	}



	public function show($id)
	{
		$user = User::find($id);
		$uploadCount = Upload::where('user_id', '=', $id)->get();

		$uploads = DB::table('uploads')
		->where('user_id', $id)
		->orderBy('created_at', 'desc')
		->paginate(5);

		return View::make('users.show', compact('uploads', 'uploadCount'))
		->with('user', $user);
	}


	public function edit()
	{
		$user = User::find(Auth::user()->id);


		$annonces = DB::table('annonces')
		->where('username', '=', Auth::user()->username)
		->orderBy('created_at', 'desc')
		->paginate(6);

		return View::make('users.edit', compact('annonces'))
		->with('user', $user);
	}


	public function update($id)
	{
		$rules = array(
			'username'       => 'required',
			'email'      => 'required|email'
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('users/' . $id . '/edit')
			->withErrors($validator)
			->withInput(Input::except('password'));
		} else {

			$user = User::find(Auth::user()->id);
			$user->username       = Input::get('username');
			$user->email      	= Input::get('email');
			$user->save();

			return Redirect::to('profile')->with('success', 'Votre profil a bien été modifié.');
		}
	}



	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		return Redirect::to('users')->with('success', 'Membre supprimé.');
	}

	public function showLogin()
    {
        if (Auth::check())
        {
            return Redirect::to('admin')->with('success', 'Vous êtes déjà connecté.');
        }

        return View::make('admin.index');
    }


    public function postLogin()
    {
    	$userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
            );

        $rules = array(
            'username'  => 'Required',
            'password'  => 'Required'
            );

        $validator = Validator::make($userdata, $rules);

        if ($validator->passes())
        {
            if (Auth::attempt(array(
            	'username' => Input::get('username'),
            	'password' => Input::get('password')
            	)))
            {
                return Redirect::to('admin')->with('success', 'Vous êtes bien connecté.');
            }

            else
            {
                return Redirect::to('admin')->with('error', 'Mauvais identifiant/Mot de passe ou Compte non activé')->withInput(Input::except('password'));
            }
        }

        return Redirect::to('admin')->withErrors($validator)->withInput(Input::except('password'));
    }


    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('')->with('info', 'Vous venez de vous déconnecter.');
    }



}
