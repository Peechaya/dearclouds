@extends('layouts.master')

@section('title')
@parent
:: tranlations
@stop

@section('content')



@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<center>
   <div class="row">
@foreach ($tranlations as $tranlation)
<div class="col-lg-4">
   <a href="tranlations/{{ $tranlation->id }}"><img class="img-thumbnail" src="{{ $tranlation->photo }}"></a>
      <h3>{{ $tranlation->title }}</h3>
      <p>{{ $tranlation->content }}</p>

      <p><a class="btn btn-default" href="tranlations/{{ $tranlation->id }}" role="button">Read More</a></p>
<br><br><br>      </div>



      @endforeach
</div>


{{ $tranlations->links(); }}



</center>


@stop
