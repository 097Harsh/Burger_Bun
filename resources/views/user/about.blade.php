<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>About</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="user/assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
@include('user.common.header')
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">About Us</h2>
        </div>
    </div>
</section>
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="user/assets/images/about1.jpg" alt="" class="img-fluid radius-image-full">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our Resturant</h5>
                    <h3 class="title-big">Hello and Welcome to our restaurant! Right Ingredients for the Right Food</h3>
                    <p class="mt-4">Welcome to a culinary haven! Here, we meticulously select the finest ingredients, transforming them into mouthwatering dishes that redefine your dining experience. Come explore the perfect harmony of flavor and freshness.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-4" href="about.html"> Read More </a>

                    <a href="#small-dialog1" class="popup-with-zoom-anim play-view text-center position-absolute mt-md-5 mt-4">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span> 
                        </span>
                        See Our Story
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://www.youtube.com/embed/dCVEY88Fn1k" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features -->
<section class="w3l-reasons py-5" id="how">
    <div class="main-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-small">Our process</h6>
                <h3 class="title-big">How We Work</h3>
            </div>
            <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                <div class="col-lg-3 col-sm-6 grids-feature">
                    <a href="#url" class="icon"><span class="fa fa-pie-chart"></span></a>
                    <h4><a href="#feature" class="title-head">Food Served Hot</a></h4>
                    <p>Taste the temperature of perfection: Food served steaming hot, just like it should be.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-cogs"></span></a>
                    <h4><a href="#feature" class="title-head">Ample options</a></h4>
                    <p>Every path, a new adventure, Discover something you love.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-glass"></span></a>
                    <h4><a href="#feature" class="title-head">In-House Brevery</a></h4>
                    <p>Uncork handcrafted artistry: In-house brewing where passion meets flavor, igniting an unforgettable experience.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-motorcycle"></span></a>
                    <h4><a href="#feature" class="title-head">Fastest delivery</a></h4>
                    <p>Lightning-fast deliveries straight to your door, the ultimate in speed and convenience.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->

<!--/team-sec-->

<!-- testimonials -->
<!-- footer -->
@include('user.common.footer')
<!-- //footer -->
<!-- copyright -->

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<script src="user/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="user/assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<script src="user/assets/js/owl.carousel.js"></script><!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="user/assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="user/assets/js/counter.js"></script>

<!-- gallery popup js -->
<script src="user/assets/js/smartphoto.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sm = new SmartPhoto(".js-img-viwer", {
      showAnimation: false
    });
    // sm.destroy();
  });
</script>
<!-- //gallery popup js -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="user/assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->

</body>

</html>