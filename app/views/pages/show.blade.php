@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')



<div class="col-md-8">
    <h2>{{ $page->title }}</h2>
    <p><i>Ajouté le {{ $page->created_at }}</i></p>


    <p><img src="../{{ $page->photo }}" class="img-responsive img-rounded" alt="photo"></p>

    <pre> {{ $page->content }}</pre>

</div>


<div class="col-md-4 panel-group">


    <!-- <div class="text-center">
        <h1 class="jumbotron">{{ $page->url }}€</h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Contacter <strong>{{ $page->username }}</strong></h3>
        </div>
        <div class="panel-body">
            <p><strong>Département : </strong>{{ $user->departement }}</p>
            <p><strong>Email : </strong>{{ $user->email }}</p>
        </div>
    </div> -->
</div>


<br><br>





@stop