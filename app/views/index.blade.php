@extends('layouts.home')

@section('title')
@parent
:: Home
@stop

@section('content')

<div class="head-perso">
	<div class="container">
		<div class="text-center">
			<h3><i>Hi! I'm Manorie.</i></h3>

			I'm a Web Developer currently working at Cloudwatt, Paris.
			<a href="#">Read more?</a>


		</div>
	</div>
</div>

<section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Last project</h2>

										@foreach ($projects as $project)

										   <a href="projects/{{ $project->id }}"><img class="img-thumbnail" src="{{ $project->photo }}"></a>
										      <h3>{{ $project->title }}</h3>
										      <p>{{ $project->content }}</p>

										      <p><a class="btn btn-default" href="projects/{{ $project->id }}" role="button">Read More</a></p>
										<br><br><br>     



										      @endforeach
                </div>
            </div>
        </div>
    </section>



		<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How i work</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons" data-sr-id="2" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>Analyse</h3>
                        <p class="text-muted">J'analyse le besoin</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons" data-sr-id="3" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>Solution</h3>
                        <p class="text-muted">Je propose la solution adéquate</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons" data-sr-id="4" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>Propositions</h3>
                        <p class="text-muted">Je vous fais des propositions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons" data-sr-id="5" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<section class="no-padding" id="portfolio">
			 <div class="container-fluid">
					 <div class="row no-gutter popup-gallery">
							 <div class="col-lg-4 col-sm-6">
									 <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
											 <img src="../img/Fotolia_72614757_S.jpg" class="img-responsive" alt="">
											 <div class="portfolio-box-caption">
													 <div class="portfolio-box-caption-content">
															 <div class="project-category text-faded">
																	 Category
															 </div>
															 <div class="project-name">
																	 Project Name
															 </div>
													 </div>
											 </div>
									 </a>
							 </div>
							 <div class="col-lg-4 col-sm-6">
									 <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
											 <img src="../img/Fotolia_72614757_S.jpg" class="img-responsive" alt="">
											 <div class="portfolio-box-caption">
													 <div class="portfolio-box-caption-content">
															 <div class="project-category text-faded">
																	 Category
															 </div>
															 <div class="project-name">
																	 Project Name
															 </div>
													 </div>
											 </div>
									 </a>
							 </div>
							 <div class="col-lg-4 col-sm-6">
									 <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
											 <img src="../img/Fotolia_72614757_S.jpg" class="img-responsive" alt="">
											 <div class="portfolio-box-caption">
													 <div class="portfolio-box-caption-content">
															 <div class="project-category text-faded">
																	 Category
															 </div>
															 <div class="project-name">
																	 Project Name
															 </div>
													 </div>
											 </div>
									 </a>
							 </div>
							 <div class="col-lg-4 col-sm-6">
									 <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
											 <img src="../img/Fotolia_72614757_S.jpg" class="img-responsive" alt="">
											 <div class="portfolio-box-caption">
													 <div class="portfolio-box-caption-content">
															 <div class="project-category text-faded">
																	 Category
															 </div>
															 <div class="project-name">
																	 Project Name
															 </div>
													 </div>
											 </div>
									 </a>
							 </div>
							 <div class="col-lg-4 col-sm-6">
									 <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
											 <img src="../img/Fotolia_72614757_S.jpg" class="img-responsive" alt="">
											 <div class="portfolio-box-caption">
													 <div class="portfolio-box-caption-content">
															 <div class="project-category text-faded">
																	 Category
															 </div>
															 <div class="project-name">
																	 Project Name
															 </div>
													 </div>
											 </div>
									 </a>
							 </div>
							 <div class="col-lg-4 col-sm-6">
									 <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
											 <img src="../img/Fotolia_72614757_S.jpg" class="img-responsive" alt="">
											 <div class="portfolio-box-caption">
													 <div class="portfolio-box-caption-content">
															 <div class="project-category text-faded">
																	 Category
															 </div>
															 <div class="project-name">
																	 Project Name
															 </div>
													 </div>
											 </div>
									 </a>
							 </div>
					 </div>
			 </div>
	 </section>


<div class="ban-white">
	<div class="container">
		<div class="text-center">
			<h1>Skills</h1>

			Photoshop, PHP, MySQL, CSS3, HTML5, Shell, Laravel, Wordpress, JavaScript, JQuery, CakePHP, Dreamweaver, Bootstrap
		</div>
	</div>
</div>


<div class="container">
	<div class="text-center">
		<h1>Things i love</h1>

		{icons}
	</div>
</div>



</div>
@stop
