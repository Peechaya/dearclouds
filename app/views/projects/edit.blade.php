@extends('layouts.master')

@section('title')
@parent
:: Editer
@stop

@section('content')


    @if ( Auth::guest() )
    <h2>Tu n'as rien à faire là :)</h2>

    @else

    <h2>Editer <strong>{{ $project->title }}</strong></h2>

    <p class="bg-danger">{{ HTML::ul($errors->all()) }}</p>

    {{ Form::model($project, array('route' => array('projects.update', $project->id), 'method' => 'PUT')) }}

    <div class="form-group">
    {{Form::label('categorie','Catégorie')}}
    {{ Form::select('categorie', array(
    'Maquettes' => 'Maquettes',
    'Webdesign' => 'Webdesign',
    'Websites' => 'Websites',
    ), null, array('class' => 'form-control')) }}
</div>

    <div class="form-group">
    {{Form::label('title','Titre')}}
    {{Form::text('title', null,array('class' => 'form-control'))}}
</div>

<!-- <div class="form-group">
    {{Form::label('photo','Image')}}
    {{Form::text('photo', null,array('class' => 'form-control'))}}
</div> -->

<div class="form-group">
	{{Form::label('photo','Image')}}
	{{ Form::file('file','',array('id'=>'')) }}
</div>

<div class="form-group">
    {{Form::label('content','Content')}}
    {{Form::textarea('content', null,array('class' => 'form-control'))}}
</div>
<script type="text/javascript">
  CKEDITOR.replace( 'content' );
</script>

<div class="form-group">
    {{Form::label('url','Lien')}}
    {{Form::text('url', null,array('class' => 'form-control'))}}
</div>

    {{ Form::submit('Editer', array('class' => 'btn btn-primary')) }}
    <a href="javascript:window.history.go(-1)" class="btn btn-small btn-default">Annuler</a>

    {{ Form::close() }}


    @endif








@stop
