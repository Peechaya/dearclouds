@extends('layouts.master')

@section('title')
@parent
:: Créer une page
@stop

@section('content')
</nav>

<h1>Créer une page</h1>

{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'pages')) }}

<div class="form-group">
	{{Form::label('title','Titre')}}
	{{Form::text('title', null,array('class' => 'form-control'))}}
</div>

<div class="form-group">
	{{Form::label('photo','Photo')}}
	{{Form::text('photo', null,array('class' => 'form-control'))}}
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