@extends('layouts.home')

@section('title')
@parent
:: Home
@stop

@section('content')


<div class="row">
	<a href="webprojects"> <div class="col s6" id="webdeveloper">
		<div class="desc">
			<h2 class="animated jackInTheBox"><span
				class="txt-rotate"
				data-period="2000"
				data-rotate='[ "Web developer", "Webmaster", "Webdesigner", "Web Integrator" ]'></span></h2>
				<p class="animated slideInLeft">You have to make your websites with love these days!</p>
			</div>
		</div>
	</a>

	<a href="translations"><div class="col s6" id="translator">
		<div class="desc">
			<h2 class="animated jackInTheBox">Translator</h2>
			<p class="animated slideInRight">I'm translating shows and movies since 15 and i can't get enough</p>
		</div></div></a>

		<a href="fosterfamily"><div class="col s6" id="foster">
			<div class="desc">
				<h2 class="animated jackInTheBox">Fostering Cats</h2>
				<p class="animated slideInLeft">Do you have any idea on how many cats are mistreated?</p>
			</div></div></a>

			<a href="https://www.etsy.com/shop/MadCloudsStudio" target="_blank"><div class="col s6" id="madclouds">
				<div class="desc">
					<h2 class="animated jackInTheBox">MadClouds Studio</h2>
					<p class="animated slideInRight">A shop where you can find ready-to-go items or order many services</p>
				</div></div></a>
			</div>


			<div id="about">

				<img src="img/profile.png">

			</div>


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

<!-- <section id="services">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="section-heading">What i do</h2>
<hr class="primary">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 text-center">
<div class="service-box">
<i class="fa fa-4x fa-code text-primary sr-icons"></i>
<h3>Web Development</h3>
<p class="text-muted">I do web apps from scratch</p>
</div>
</div>
<div class="col-lg-3 col-md-6 text-center">
<div class="service-box">
<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
<h3>Design</h3>
<p class="text-muted">I'm making my code sexy</p>
</div>
</div>
<div class="col-lg-3 col-md-6 text-center">
<div class="service-box">
<i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
<h3>SEO</h3>
<p class="text-muted">Your app won't fall in google abysses</p>
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

<div class="col-lg-12 text-center">
<h2 class="section-heading">Last projects</h2>
<hr class="primary">
</div>

<div class="row no-gutter">

@foreach ($projects as $project)


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

@endforeach

</div>
</div>
</section>






<section class="bg-primary" id="about">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 text-center">
<h2 class="section-heading">Blabla</h2>

Blablabla
</div>
</div>
</div>
</section>




</div> -->
@stop
