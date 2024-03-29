
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact</title>

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
            <h2 class="title">Contact Us</h2>
        </div>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Get in touch with us</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="{{url('/store_contact')}}" method="post" class="text-right">
                          @csrf
                            <div class="form-grid">
                                <input type="text" name="name" id="name" placeholder="Please enter your name" required="">
                                <input type="email" name="email" id="email" placeholder="Please enter your email" required="">
                                <input type="text" name="contact" id="contact" placeholder="Please enter your phone number"
                                    required="">
                                <input type="text" name="subject" id="subject" placeholder="Please enter your subject">
                            </div>
                            <textarea name="msg" id="msg" placeholder="Please Enter your message"></textarea>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="mt-md-5 mt-4">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>Burger Bun, 208 Trainer Avenue street, Corner
                                Market, NY - 62617. </p>
                            <p> <a href="mailto:info@example.com"><span
                                        class="fa fa-envelope"></span>info@example.com</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+12 5348943649"> +12 534894364</a></p>

                            <h5 class="mt-4 mb-3">Opening Hours</h5>
                            <div class="hours">
                                <p><span class="fa fa-clock-o"></span>10:00am - 09:00pm</p>
                                <p>Sunday Closed</p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->

<!-- footer -->
@include('user.common.footer')

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