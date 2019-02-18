<!DOCTYPE html>
<html>
<head>
    <title>Dear Clouds
        @section('title')
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <!-- Materialize Core CSS -->
    <link href="/css/materialize.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <!-- <link href="css/screen.css" rel="stylesheet">
    <link href="css/ie.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="Https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Plugin CSS -->
    <!-- <link href="css/magnific-popup.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body id="page-top">





@yield('content')

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/anime.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <script>
    var pathEls = document.querySelectorAll('path');
for (var i = 0; i < pathEls.length; i++) {
var pathEl = pathEls[i];
var offset = anime.setDashoffset(pathEl);
pathEl.setAttribute('stroke-dashoffset', offset);
anime({
  targets: pathEl,
  strokeDashoffset: [offset, 0],
  duration: anime.random(1000, 3000),
  delay: anime.random(0, 2000),
  loop: true,
  direction: 'alternate',
  easing: 'easeInOutSine',
  autoplay: true
});
}
    </script>

    <script>
    (function() {
console.log(anime.easings);
this.openTheMenu = function() {
  let ht = window.innerHeight + 'px';
  let wt = window.innerWidth + 'px';
  let section-hover = document.querySelector('.menu-icon');
  let menuList = document.querySelector('.menu-list');
  let timeLine = anime.timeline();
  timeLine.add({
      targets: '#webdeveloper',
      height: {
        value: ht
      },
      width: {
        value: wt
      },
      borderRadius: {
        value: '0px',
        duration: 300,
        easing: 'linear'
      },
      easing: 'easeInQuart',
      duration: 500,
      backgroundColor: {
        value: '#282830'
      },
      begin: function(anim) {
        console.log(anim.began);
        section-hover.style.display = "none";
      },
      complete: function(anim) {
        console.log(anim.completed);
        menuList.style.display = "block";
      }
    })
    .add({
      targets: '.el',
      opacity: 1,
      easing: 'easeInSine',
      duration: function(el, i, l) {
        return i * 500;
      }
    });
}
})();
    </script>



    </body>
    </html>
