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
         <h2 class="section-heading">Projects</h2>
         <hr class="primary">
     </div>

     <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">ALL</a></li>
    <li role="presentation"><a href="#maquettes" aria-controls="maquettes" role="tab" data-toggle="tab">Maquettes</a></li>
    <li role="presentation"><a href="#webdesign" aria-controls="webdesign" role="tab" data-toggle="tab">Webdesign</a></li>
    <li role="presentation"><a href="#websites" aria-controls="websites" role="tab" data-toggle="tab">Websites</a></li>
  </ul>

  <!-- Tab panes -->
   <div class="tab-content">

     <!--'Maquettes' => 'Maquettes',
	'Webdesign' => 'Webdesign',
	'Websites' => 'Websites',
	'Scripts' => 'Scripts',
	'Translations' => 'Translations' -->

    @foreach ($projects as $project)


      <div role="tabpanel" class="tab-pane active" id="all">

        <div class="col-lg-4 col-sm-6 sr-button">
          <a href="project/{{ $project->id }}" class="portfolio-box">
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

    </div>

@if ($project->categorie == 'Maquettes')
    <div role="tabpanel" class="tab-pane" id="maquettes">

      <div class="col-lg-4 col-sm-6 sr-button">
        <a href="project/{{ $project->id }}" class="portfolio-box">
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

  </div>

@elseif ($project->categorie == 'Webdesign')
    <div role="tabpanel" class="tab-pane" id="webdesign">

      <div class="col-lg-4 col-sm-6 sr-button">
        <a href="project/{{ $project->id }}" class="portfolio-box">
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

  </div>

@elseif ($project->categorie == 'Websites')
    <div role="tabpanel" class="tab-pane" id="websites">

      <div class="col-lg-4 col-sm-6 sr-button">
        <a href="project/{{ $project->id }}" class="portfolio-box">
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

  </div>

@endif
@endforeach


  </div>

</div>

       <div class="row no-gutter">



       </div>
   </div>
</section>


{{ $projects->links(); }}



</center>


@stop
