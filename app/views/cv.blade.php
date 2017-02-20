@extends('layouts.home')

@section('title')
@parent
:: CV
@stop

@section('content')



@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


 <div class="competence sr-button">PHP</div>

 <div class="competence sr-button">Laravel</div>

 <div class="competence sr-button">CSS/HTML</div>

 <div class="competence sr-button">JavaScript</div>

 <div class="competence sr-button">Photoshop</div>

 <div class="competence sr-button">Jekyll</div>

 <div class="competence sr-button">Webdesign</div>

 <div class="competence sr-button">MySQL</div>

 <div class="competence sr-button">SEO</div>

 <div class="competence sr-button">Git</div>

 <div class="competence sr-button">Shell</div>

 <div class="competence sr-button">Linux</div>

 <div class="competence sr-button">Wordpress</div>


@stop
