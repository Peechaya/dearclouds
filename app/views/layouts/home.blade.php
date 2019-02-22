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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.0/TweenMax.min.js"></script>

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- production version, optimized for size and speed -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

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
    <script src="js/animation.js"></script>
    <script src="js/anime.min.js"></script>

    <script>
    // Animate CSS by Daniel Eden: https://github.com/daneden/animate.css

$(document).ready( function(){
  // Foster section
$("#foster .desc").click( function() {
  $("#foster-hover").addClass("animated fadeInLeft open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass("animated fadeInLeft");
  });
  $("#foster-hover .hover-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass("animated flipInY");
  });
});
$("#foster-hover .close-icon").click( function() {
    $("#foster-hover").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass("animated flipOutY open");
    });
});
  // Translator section
$("#translator .desc").click( function() {
  $("#translator-hover").addClass("animated fadeInRight open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    $(this).removeClass("animated fadeInRight");
  });
  $("#translator-hover .hover-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass("animated flipInY");
   });
});
$("#translator-hover .close-icon").click( function() {
  $("#translator-hover").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    $(this).removeClass("animated flipOutY open");
  });
});
// Webdeveloper section
$("#webdeveloper .desc").click( function() {
$("#webdeveloper-hover").addClass("animated fadeInRight open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  $(this).removeClass("animated fadeInRight");
});
$("#webdeveloper-hover .hover-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    $(this).removeClass("animated flipInY");
 });
});
$("#webdeveloper-hover .close-icon").click( function() {
$("#webdeveloper-hover").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  $(this).removeClass("animated flipOutY open");
});
});
// MadClouds section
$("#madclouds .desc").click( function() {
$("#madclouds-hover").addClass("animated fadeInRight open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  $(this).removeClass("animated fadeInRight");
});
$("#madclouds-hover .hover-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    $(this).removeClass("animated flipInY");
 });
});
$("#madclouds-hover .close-icon").click( function() {
$("#madclouds-hover").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
  $(this).removeClass("animated flipOutY open");
});
});

});
    </script>

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
// (function() {
// 	console.log(anime.easings);
// 	this.openSection = function() {
// 		let ht = window.innerHeight + 'px';
// 		let wt = window.innerWidth + 'px';
// 		let webdeveloper = document.querySelector('#webdeveloper');
// 		let webdeveloperhover = document.querySelector('#webdeveloper-hover');
//     let translator = document.querySelector('#translator');
//     let foster = document.querySelector('#foster');
//     let madclouds = document.querySelector('#madclouds');
//     let about = document.querySelector('#about');
// 		let timeLine = anime.timeline();
// 		timeLine.add({
// 				targets: 'body',
//         direction: 'alternate',
// 				height: {
// 					value: ht
// 				},
// 				width: {
// 					value: wt
// 				},
// 				easing: 'linear',
// 				duration: 500,
// 				backgroundColor: {
// 					value: '#282830'
// 				},
// 				begin: function(anim) {
// 					console.log(anim.began);
// 					webdeveloper.style.display = "none";
//           translator.style.display = "none";
//           foster.style.display = "none";
//           madclouds.style.display = "none";
//           about.style.display = "none";
// 				},
// 				complete: function(anim) {
// 					console.log(anim.completed);
// 					webdeveloperhover.style.display = "inline";
// 				}
// 			})
// 	}
// })();
</script>


    </body>
    </html>
