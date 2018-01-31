@extends('layouts.master')

@section('title')
@parent
:: translations
@stop

@section('content')

COUCOU

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<center>
   <div class="row">
@foreach ($translations as $translation)
<div class="col-lg-4">
   <a href="translations/{{ $translation->id }}"><img class="img-thumbnail" src="{{ $translation->photo }}"></a>
      <h3>{{ $translation->title }}</h3>
      <p>{{ $translation->content }}</p>

      <p><a class="btn btn-default" href="translations/{{ $project->id }}" role="button">Read More</a></p>
<br><br><br>      </div>



      @endforeach
</div>


{{ $translations->links(); }}



</center>


@stop
