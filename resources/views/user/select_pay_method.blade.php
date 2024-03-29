@php
$userId = session('user_id');
//echo "User ID: $userId";
//die();
//echo $totalprice;
@endphp

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Payment-Method</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
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
            <h2 class="title">Give your Feedbacks</h2>
        </div>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-12">
                        <h3 class="title-big">Payment via-mode ...</h3>
                        <br>
                        <!-- Inside your HTML form -->
                        <form id="payment_form" method="post" action="{{ url('/placeorder/'.$userId) }}">
                            @csrf
                            <div class="form-group">
                            <input type="hidden" name="total_price" id="total_price" value="{{ $totalprice }}">
                                <label for="payment_method">Select Payment Method:</label>
                                <select class="form-control" id="payment_method" name="payment_method">
                                    <option value="select">---Select payment-method ---</option>
                                    <option value="cash">Cash on Hand</option>
                                    <option value="razorpay">Razorpay</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Place Order</button>
                        </form>
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