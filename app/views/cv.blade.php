@extends('layouts.cv')

@section('title')
@parent
:: CV
@stop

@section('content')



@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div id="canvas">


 <div class="competence">PHP</div>

 <div class="competence">Laravel</div>

 <div class="competence">CSS/HTML</div>

 <div class="competence">JavaScript</div>

 <div class="competence">Photoshop</div>

 <div class="competence">Jekyll</div>

 <div class="competence">Webdesign</div>

 <div class="competence">MySQL</div>

 <div class="competence">SEO</div>

 <div class="competence">Git</div>

 <div class="competence">Shell</div>

 <div class="competence">Linux</div>

 <div class="competence">Wordpress</div>

</div>

@stop
