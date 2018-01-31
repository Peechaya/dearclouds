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

<a href="pages/create" class="btn btn-default btn-lg">+Page</a>
<a href="projects/create" class="btn btn-default btn-lg">+Project</a>
<a href="translation/create" class="btn btn-default btn-lg">+Translation</a>
<a href="fosters/create" class="btn btn-default btn-lg">+Foster</a>

<h1>Derniers projets</h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Miniature</th>
      <th>Titre</th>
      <th>Date d'ajout</th>
      <th>Options</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($projects as $project)
    <tr>
      <td><img src="{{ $project->photo }}" class="miniatures" style="width:250px;"></td>
      <td>{{ $project->title }}</td>


      <td>{{ $project->created_at }}</td>
      <td>

        {{ Form::open(array('url' => 'projects/' . $project->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Supprimer', array('class' => 'btn pink darken-3')) }}
        {{ Form::close() }}

        <a class="btn light-green" href="{{ URL::to('projects/' . $project->id) }}" target="_blank">Voir</a>

        <a class="btn" href="{{ URL::to('projects/' . $project->id . '/edit') }}">Editer</a>

      </td>
    </tr>
    @endforeach

  </tbody>

</table>




    @endif

</div>

{{ Form::close() }}
@stop
