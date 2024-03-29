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

    <title>All Event</title>

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
            <h2 class="title">Event with Us</h2>
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
                        <h3>Your all events</h3><br>
                        <div class="table-responsive">
                            <a href="{{route('add_event')}}"><button class="btn btn-success" style="float:right; text-color:white;">Schedule Event</button></a><br><br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Event ID</th>
                                        <th>Event Title</th>
                                        <th>User Name</th>
                                        <th> contact</th>
                                        <th>Event Type</th>
                                        <th>Event Date</th>
                                        <th>Event Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{$event->e_id}}</td>
                                        <td>{{$event->title}}</td>
                                        <td>{{$event->name}}</td>
                                        <td>{{$event->contact}}</td>
                                        <td>{{$event->e_type}}</td>
                                        <td>{{$event->e_date}}</td>
                                        <td>{{$event->status}}</td>
                                        @if($event->status == 'Rejected')
                                        <td>Admin Reject Your Request</td>
                                        @elseif($event->status == 'Cancled by the user')
                                        <td>Cancled by the user</td>
                                        @else
                                        <td>
                                          <a href="{{ route('cancle', ['e_id' => $event->e_id]) }}"><button class="btn btn-danger">Cancle</button></a>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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