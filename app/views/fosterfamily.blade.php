@extends('layouts.master')

@section('title')
@parent
:: cats
@stop

@section('content')

COUCOU

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<center>
   <div class="row">
@foreach ($cats as $cat)
<div class="col-lg-4">
   <a href="cats/{{ $cat->id }}"><img class="img-thumbnail" src="{{ $cat->photo }}"></a>
      <h3>{{ $cat->title }}</h3>
      <p>{{ $cat->content }}</p>

      <p><a class="btn btn-default" href="cats/{{ $cat->id }}" role="button">Read More</a></p>
<br><br><br>      </div>



      @endforeach
</div>


{{ $cats->links(); }}



</center>



@stop
