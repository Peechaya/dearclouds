@extends('layouts.master')

@section('title')
@parent
:: {{ $project->title }}
@stop

@section('content')



<div class="container">
    <div class="text-center">
        <h2>{{ $project->title }}</h2>
        <p><img src="{{ $project->photo }}" class="img-rounded" alt="photo"></p>
    </div>

    <pre>
        <p><i>Ajouté le {{ $project->created_at }}</i></p>
        {{ $project->content }}
    </pre>

</div>




<br><br>





@stop