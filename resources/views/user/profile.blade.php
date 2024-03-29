<script>
        // Check if a success message is present in the session
        @if(session('success'))
            // Display an alert with the success message
            alert("{{ session('success') }}");
        @endif
</script>
@php
$userId = session('user_id');
//echo "User ID: $userId";
//die();
@endphp
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iK7t9i6U8+JEC0W1QtxlKTu6U/mYh7VSMjIlx6AgGgZl5S6tNJc9a" crossorigin="anonymous">

    <title>My Profile </title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template CSS  {{asset('admin/js/bootstrap.js')}}-->
    <link rel="stylesheet" href="{{asset('user/assets/css/style-starter.css')}}">
  </head>
  <body>
<!--header-->
@include('user.common.header')
<!--/header-->
<!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-lg-6 col-sm-12">
                <h3 class="">Delight your Best. </h3>
                <h2 class="mb-4">Steak Burger</h2>
                <p>We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident.
                    fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac
                    cursus quis, leo.</p>
                <div class="mt-md-5 mt-4">
                    <a class="btn btn-primary btn-style mr-2" href="menu.html"> See Menu </a>
                    <a class="btn btn-outline-primary btn-style" href="#call"> Book a table </a>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-12">
                        <h3 class="title-big">Profile</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your information  will not be published. All fields are required *</p>
                        <form action="{{ url('/update_profile/'.$userId) }}" method="post" class="text-right" enctype="multipart/form-data">
                        @csrf
                            <input type="text" name="name" id="name" value="{{$users->name}}" placeholder="Enter name" required=""><br><br>
                            <input type="text" name="email" id="email" value="{{$users->email}}" placeholder="Enter email" required=""><br><br>
                            <input type="text" name="contact" id="contact" value="{{$users->Contact}}" placeholder="Enter contact" required=""><br><br>
                            <input type="password" name="password" id="password" value="{{$users->password}}" placeholder="Enter password" required=""><br><br>
                            <input type="password" name="cpassword" id="cpassword" value="{{$users->password}}" placeholder="Enter confirm-password" required="">
                            <textarea name="address" id="address" placeholder="Enter your address">{{$users->address}}</textarea><br><br>
                            <input type="file" name="image" id="image" placeholder="Enter image" required=""><br><br>
                            <h8 style="float:left;">Choose your gender:</h8>
                            <div class="row">
                                <div class="col-auto">
                                    <!-- Gender -->
                                    <!-- Group of default radios - option 1 -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" value="{{$users->gender}}" name="gender" value="Male"  @if($users->gender == 'Male') checked @endif>
                                        <label class="custom-control-label" for="defaultGroupExample1">Male</label>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <!-- Group of default radios - option 3 -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="defaultGroupExample3"  name="gender" value="Female"  @if($users->gender == 'Female') checked @endif>
                                        <label class="custom-control-label" for="defaultGroupExample3">Female</label>
                                    </div>
                                </div>
                            </div><br>
                            <select class="form-control" id="area" name="area">
                                <option value="">--Select Area--</option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->area_id }}" @if($area->area_id == $users->area_id) selected @endif>{{ $area->area_name }}</option>
                                @endforeach
                            </select>

                            
                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-style mt-3">Update profile</button>
                        </form>
                        <p class="mb-4 mt-lg-0 mt-2">Already have an account? <a href="{{route('login')}}">Login</a></p>
                        
                    </div>
                    
                  
                </div>
            </div>
        </div>
    </div>
</section>
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