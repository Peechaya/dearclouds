@extends('layouts.home')

@section('title')
@parent
:: CV
@stop

@section('content')



@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<center>
   <div class="row">
@foreach ($projects as $project)
<div class="col-lg-4">
   <a href="projects/{{ $project->id }}"><img class="img-thumbnail" src="{{ $project->photo }}"></a>
      <h3>{{ $project->title }}</h3>
      <p>{{ $project->content }}</p>

      <p><a class="btn btn-default" href="projects/{{ $project->id }}" role="button">Read More</a></p>
<br><br><br>      </div>



      @endforeach
</div>




</center>


@stop
