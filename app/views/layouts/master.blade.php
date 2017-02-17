<!DOCTYPE html>
<html>
<head>
    <title>Portfolio
        @section('title')
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    @section('styles')
    body {
        padding-top: 60px;
    }
    @show
    </style>
    </head>

    <body id="page-top">

    <div style="margin: 0 auto; width: 80px; border-radius: 100px; margin-top: -50px; z-index: 3; position: relative;"><img src="../img/profile.png" alt="profile" width="80" style="border-radius: 100px; z-index: 3; border: 3px solid black;"></div>

    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="z-index: 1;">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>

    <a href="{{{ URL::to('') }}}" class="navbar-brand">Portfolio</a>
    </div>

    <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

    <li></li>
    </ul>


    <div class="navbar-right">
    <ul class="nav navbar-nav">
    <li>{{ HTML::link('portfolio', 'Portfolio') }}</li>
    @if (Auth::guest())

    <li>{{ HTML::link('admin', 'Administration') }}</li>
    @else
    <li>{{ HTML::link('admin', 'Administration') }}</li>
    <li>{{ HTML::link('logout', 'Se déconnecter') }}</li>
    @endif
    </ul>
    </div>



    </div>
    </div>
    </div>


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
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>



    </body>
    </html>
