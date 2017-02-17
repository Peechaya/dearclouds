@extends('layouts.home')

@section('title')
@parent
:: Home
@stop

@section('content')


<!-- <section class="bg-primary" id="about">
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
    </section> -->

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
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Analyse</h3>
                        <p class="text-muted">J'analyse le besoin</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Solution</h3>
                        <p class="text-muted">Je propose la solution adéquate</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Propositions</h3>
                        <p class="text-muted">Je vous fais des propositions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
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
									 <a href="../img/Fotolia_72614757_S.jpg" class="portfolio-box">
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
									 <a href="../img/Fotolia_72614757_S.jpg" class="portfolio-box">
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
									 <a href="../img/Fotolia_72614757_S.jpg" class="portfolio-box">
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
									 <a href="../img/Fotolia_72614757_S.jpg" class="portfolio-box">
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
									 <a href="../img/Fotolia_72614757_S.jpg" class="portfolio-box">
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
									 <a href="../img/Fotolia_72614757_S.jpg" class="portfolio-box">
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






		<section class="bg-primary" id="about">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2 text-center">
		                    <h2 class="section-heading">Skills</h2>

												PHP, MySQL, CSS3, HTML5, Shell, Laravel, Wordpress, Photoshop, JavaScript, JQuery, CakePHP, Dreamweaver, Bootstrap
		                </div>
		            </div>
		        </div>
		    </section>




</div>
@stop
