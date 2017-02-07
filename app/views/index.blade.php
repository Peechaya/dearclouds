@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')


<div class="head-perso">
	<div class="container">
		<div class="text-center">
			<h3><i>Hi! I'm Manorie.</i></h3>

			I'm a Web Development student at Epitech, Paris.
			<a href="#">Read more?</a>

			<h3>Last projects</h3>
		</div>
	</div>
</div>

<div class="container">
	<div class="text-center">
		<h1>How i work</h1>

		<div class="row">
			<div class="col-md-4"><h3>Step 1</h3></div>
			<div class="col-md-4"><h3>Step 2</h3></div>
			<div class="col-md-4"><h3>Step 3</h3></div>
		</div>
	</div>
</div>

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


