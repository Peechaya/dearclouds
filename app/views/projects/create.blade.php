@extends('layouts.master')

@section('title')
@parent
:: Ajouter un projet
@stop

@section('content')
</nav>

<h1>Ajouter un projet</h1>

{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'projects', 'files'=>true)) }}

<div class="form-group">
	{{Form::label('categorie','Catégorie')}}
	{{ Form::select('categorie', array(
	'Maquettes' => 'Maquettes',
	'Webdesign' => 'Webdesign',
	'Websites' => 'Websites',
	'Scripts' => 'Scripts',
	'Translations' => 'Translations'
	), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{Form::label('title','Titre')}}
	{{Form::text('title', null,array('class' => 'form-control'))}}
</div>


<div class="form-group">
	{{Form::label('photo','Image')}}
	{{ Form::file('file','',array('id'=>'')) }}
</div>

<div class="form-group">
	{{Form::label('content','Content')}}
	{{Form::textarea('content', null,array('class' => 'form-control'))}}
</div>
<div class="form-group">
	{{Form::label('url','Lien')}}
	{{Form::text('url', null,array('class' => 'form-control'))}}
</div>

{{Form::submit('Créer', array('class' => 'btn btn-primary'))}}
{{ Form::close() }}

@stop
