@extends('layouts.master')

@section('title')
@parent
:: Pages
@stop

@section('content')



@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<center>
   <div class="row">
@foreach ($pages as $page)
<div class="col-lg-4">
   <a href="page/{{ $page->id }}"><img class="img-thumbnail" src="../{{ $page->photo }}"></a>
      <h3>{{ $page->title }}</h3>
      <p>{{ $page->content }}</p>

      <p><a class="btn btn-default" href="page/{{ $page->id }}" role="button">Read More</a></p>
<br><br><br>      </div>

      

      @endforeach
</div>


{{ $pages->links(); }}



</center>


@stop