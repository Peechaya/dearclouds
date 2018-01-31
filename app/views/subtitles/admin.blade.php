@extends('layouts.master')

@section('title')
@parent
:: Admin
@stop

@section('content')


<p class="pull-right"><a href="admin/users" class="btn btn-default btn-lg"><img src="img/users.png" alt="users"> Gérer les utilisateurs</a> 
  <a href="admin/pages" class="btn btn-default btn-lg"><img src="img/folder.png" alt="pages"> Gérer les pages</a></p>
<br>

@if ($users->count())
<h1>Derniers membres inscrits</h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Username</th>
      <th>Email</th>
      <th>Prénom</th>
      <th>Nom</th>
      <th>Date de naissance</th>
      <th>Date d'inscription</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->username }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->lastname }}</td>
      <td>{{ $user->birthdate }}</td>
      <td>{{ $user->created_at }}</td>

    </tr>
    @endforeach

  </tbody>

</table>

@else
Il n'y a aucun membre.
@endif

<br><br>


@if ($pages->count())
<h1>Dernières pages postées</h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Miniature</th>
      <th>Titre</th>
      <th>Ajouté par</th>
      <th>Prix</th>
      <th>Date d'ajout</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($pages as $page)
    <tr>
      <td class="miniatures"><img class="miniatures" src="{{ $page->photo }}"></td>
      <td>{{ $page->title }}</td>
      <td>{{ $page->username }}</td>
      <td>{{ $page->price }}</td>
      <td>{{ $page->created_at }}</td>

    </tr>
    @endforeach

  </tbody>

</table>


@else
Il n'y a aucune page.
@endif



@stop