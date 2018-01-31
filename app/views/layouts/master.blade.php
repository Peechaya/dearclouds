<!DOCTYPE html>
<html>
<head>
    <title>Portfolio
        @section('title')
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <!-- Materialize Core CSS -->
    <link href="/css/materialize.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="Https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src="/ckeditor/ckeditor.js"></script>

    <!-- Plugin CSS -->
    <link href="/css/magnific-popup.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  <body id="page-top">

  <!-- <header>
      <div class="header-content">
          <div class="header-content-inner">

          </div>
      </div>
  </header> -->


<div class="container">

  <!-- Tous les messages d'informations/errors/success -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{{ $message }}}
  </div>

  @endif


  @if ($message = Session::get('error'))
  <div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{{ $message }}}
  </div>

  @endif

  @if ($message = Session::get('info'))
  <div class="alert alert-info alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{{ $message }}}
  </div>

  @endif



  @yield('content')


  </div>

  <!-- jQuery -->
  <script src="/js/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="/js/scrollreveal.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>


  <!-- Theme JavaScript -->
  <script src="/js/creative.min.js"></script>



  </body>
  </html>
