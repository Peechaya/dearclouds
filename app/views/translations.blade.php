@extends('layouts.master')

@section('title')
@parent
:: subtitles
@stop

@section('content')

COUCOU

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<!-- <center>
   <div class="row">
@foreach ($subtitles as $subtitle)
<div class="col-lg-4">
   <a href="subtitles/{{ $subtitle->id }}"><img class="img-thumbnail" src="{{ $subtitle->photo }}"></a>
      <h3>{{ $subtitle->title }}</h3>
      <p>{{ $subtitle->content }}</p>

      <p><a class="btn btn-default" href="subtitles/{{ $subtitle->id }}" role="button">Read More</a></p>
<br><br><br>      </div>



      @endforeach
</div>


{{ $subtitles->links(); }}



</center> -->



@stop
