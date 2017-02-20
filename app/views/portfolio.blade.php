@extends('layouts.master')

@section('title')
@parent
:: projects
@stop

@section('content')


@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<section class="no-padding" id="portfolio">
   <div class="container-fluid">

     <div class="col-lg-12 text-center">
         <h2 class="section-heading"Projects</h2>
         <hr class="primary">
     </div>

       <div class="row no-gutter">

         @foreach ($projects as $project)


           <div class="col-lg-4 col-sm-6 sr-button">
               <a href="projects/{{ $project->id }}" class="portfolio-box">
                   <img src="{{ $project->photo }}" class="img-responsive" alt="" style="height:250px; width:100%;">
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
</section>


{{ $projects->links(); }}



</center>


@stop
