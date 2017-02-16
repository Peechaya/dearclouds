@extends('layouts.home')

@section('title')
@parent
:: projects
@stop

@section('content')


@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<center>
   <div class="container-fluid">
       <div class="row no-gutter popup-gallery">

@foreach ($projects as $project)

<div class="col-lg-4 col-sm-6">
    <a href="projects/{{ $project->id }}" class="portfolio-box">
        <img src="{{ $project->photo }}" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  {{ $project->categorie }}
                </div>
                <div class="project-name">
                    {{ $project->title }}
                </div>
            </div>
        </div>
    </a>
</div>




      @endforeach
</div>
</div>


{{ $projects->links(); }}



</center>


@stop
