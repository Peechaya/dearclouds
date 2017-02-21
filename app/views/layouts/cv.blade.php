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
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>



    <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    canvas {
background:
  linear-gradient(
    hsl(200, 50%, 80%) 0%,
    hsl(200, 30%, 95%) 75%)
;
display: block;
}

#canvas {
  display: block;
height: 100%;
left: 0;
position: fixed;
top: 0;
width: 100%;
background: url(http://jackrugile.com/images/misc/skyline-texture.png);
}

.competence {
  width: 100px;
  height: 100px;
  text-align: center;
  border-radius: 100px;
  min-width: 50px;
  min-height: 50px;
  background: #fff;
  opacity: 0.8;
  position: absolute;
}
  </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    </head>

    <body id="page-top">



<!-- Navbar -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{{ URL::to('') }}}">dearclouds</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>{{ HTML::link('portfolio', 'Portfolio') }}</li>
                <li>{{ HTML::link('cv', 'CV') }}</li>
                <li>{{ HTML::link('contact', 'Contact') }}</li>
                @if (Auth::guest())

                <<li><a href="/admin"><i class="fa fa-lock sr-icons"></i></a></li>

                @else

                <li><a href="/admin"><i class="fa fa-lock sr-icons"></i></a></li>
                <li><a href="/logout"><i class="fa fa-sign-out sr-icons"></i></a></li>

                @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- <header>
        <div class="header-content">
            <div class="header-content-inner">
              <img src="../img/profile.png" alt="profile" width="100" style="border-radius: 100px; border: 5px solid white;">
              <hr>
                <h1 id="homeHeading">Hi! I'm Manorie.</h1>

                <p color="white">I'm a Web Developer currently working at Cloudwatt, Paris<br />
                <small><i>Yup, Mass Effect.</i></small></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
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

    </div>

    @yield('content')




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

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://rawgithub.com/soulwire/sketch.js/master/js/sketch.min.js'></script>

      <script src="/js/canvasparallax.js"></script>
<script src="/js/randomdiv.js"></script>



    </body>
    </html>
