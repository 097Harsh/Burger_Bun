@php
$userId = session('user_id');
//echo "User ID: $userId";
//die();
@endphp
<script>
        // Check if a success message is present in the session
        @if(session('requested'))
            // Display an alert with the success message
            alert("{{ session('requested') }}");
       
        @endif
    </script>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Order</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <!-- Template CSS {{ asset('admin/css/SidebarNav.min.css') }} -->
    <link rel="stylesheet" href="{{asset('user/assets/css/style-starter.css')}}">
  </head>
  <body>
<!--header-->
@include('user.common.header')
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">My Order</h2>
        </div>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="w3l-menublock py-5">
        <!-- menu block -->
        <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
            <div class="container">
                <h1 align="center">My Order</h1><br>
                <div class="row menu-body">
                    <div class="col-lg-12">
                        <table class="table table-hover" style="float:center;">
                            <thead>
                                <tr>
                                    <td><b>Order ID</b></td>
                                    <td><b>Product</b></td>
                                    <td><b>Total Price</b></td>
                                    <td><b>Payment Method</b></td>
                                    <td><b>Payment Status</b></td>
                                    <td><b>Order Status</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groupedOrders as $item)
                                <tr>
                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ $item->p_name }}</td>
                                    <td>{{ $item->total_price }}</td>
                                    <td>{{ $item->payment_method }}</td>
                                    <td>{{ $item->payment_status }}</td>
                                    <td>{{ $item->order_status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu block -->
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
    $(document).ready(function () {
        // Initialize Bootstrap dropdown
        $('.dropdown-toggle').dropdown();
    });
</script>

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

<script src="{{asset('user/assets/js/jquery-3.3.1.min.js')}}"></script> <!-- Common jquery plugin -->

<script src="{{asset('user/assets/js/theme-change.js')}}"></script><!-- theme switch js (light and dark)-->

<script src="{{asset('user/assets/js/owl.carousel.js')}}"></script><!-- owl carousel -->

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

<script src="{{asset('user/assets/js/jquery.magnific-popup.min.js')}}"></script>
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

<script src="{{asset('user/assets/js/counter.js')}}"></script>

<!-- gallery popup js -->
<script src="{{asset('user/assets/js/smartphoto.js')}}"></script>
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
<script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
<!-- //bootstrap-->

</body>

</html>