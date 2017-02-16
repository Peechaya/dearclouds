@extends('layouts.master')

@section('title')
@parent
:: Login
@stop

{{-- Content --}}
@section('content')

<div class="row">
  @if (Auth::guest())
    <div class="col-md-4 col-md-offset-4">


        {{ Form::open(array('url' => 'admin', 'class' => 'form-horizontal')) }}


        <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}

            <div class="controls">
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
                {{ $errors->first('username') }}
            </div>
        </div>


        <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
            {{ Form::label('password', 'Mot de passe', array('class' => 'control-label')) }}

            <div class="controls">
                {{ Form::password('password', array('class' => 'form-control')) }}
                {{ $errors->first('password') }}
            </div>
        </div>

        <br><br>

        <div class="control-group">
            <div class="controls">
                {{ Form::submit('Se connecter', array('class' => 'btn btn-primary btn-lg btn-block')) }}
            </div>
        </div>

    </div>
    @else





<a href="pages/create" class="btn btn-default btn-lg">Pages</a> <a href="projects/create" class="btn btn-default btn-lg">Projects</a>


<h1>Derniers projets</h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Miniature</th>
      <th>Nom</th>
      <th>Ajouté par</th>
      <th>Taille</th>
      <th>Date d'ajout</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($projects as $project)
    <tr>
      <td width="100px"><img class="miniatures" src="{{ $project->photo }}"></td>
      <td>{{ $project->title }}</td>
      <td>{{ $project->user_id }}</td>
      <td>{{ $project->size }}</td>
      <td>{{ $project->created_at }}</td>
    </tr>
    @endforeach

  </tbody>

</table>




    @endif
</div>

{{ Form::close() }}
@stop
