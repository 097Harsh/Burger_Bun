<script>
        // Check if a success message is present in the session
        
        @if(session('success'))
            // Display an alert with the success message
            alert("{{ session('success') }}");
            
        @elseif(session('contact')) 
            alert("{{ session('contact') }}");
            @elseif(session('booking')) 
            alert("{{ session('booking') }}");
            @elseif(session('Rejected')) 
            alert("{{ session('Rejected') }}");
               
        
        @elseif(session('feedback'))
          alert("{{ session('feedback') }}");
          @elseif(session('order'))
          alert("{{ session('order') }}");
          @elseif(session('payment_success'))
          alert("{{ session('payment_success') }}");
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

    <title>Burger Bun </title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="user/assets/css/style-starter.css">
  </head>
  <body>
    <!-- Debugging -->

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
                    <a class="btn btn-primary btn-style mr-2" href="{{route('menu')}}"> See Menu </a>
                    <a class="btn btn-outline-primary btn-style" href="{{route('add_event')}}"> Book  table </a>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="user/assets/images/about.jpg" alt="" class="img-fluid radius-image-full">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://www.youtube.com/embed/dCVEY88Fn1k" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our story</h5>
                    <h3 class="title-big">Burgers! You won't Find Anywhere Else with Best Quality <span>Ingredients</span></h3>
                    <p class="mt-sm-4 mt-3">Explore unparalleled burger experiences featuring a distinctive touch and premium quality ingredients that set them apart from the rest. Indulge in a culinary journey where taste meets uniqueness, and every bite. reflects a commitment to excellence. These burgers are crafted with utmost care and using only the finest ingredients available.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-2" href="{{route('about')}}"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <img src="user/assets/images/burger.png" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Burgers</a></h4>
                    <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci dolor sit et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box">
                    <img src="user/assets/images/snack.png" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Snacks</a></h4>
                    <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci dolor sit et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box">
                    <img src="user/assets/images/beverage.png" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Beverages</a></h4>
                    <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci dolor sit et amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //bottom-grids-->

<!-- /mobile section --->
<section class="w3l-mobile-content-6 py-5">
    <div class="mobile-info py-lg-5 py-md-4 py-2">
        <!-- /mobile-info-->
        <div class="container">
            <div class="row mobile-info-inn mx-lg-0">
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-leaf"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Natural ingredients</a></h6>
                            <p>Embrace the pure, wholesome joy of our naturally crafted products, each bite bursting with authentic richness.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-shopping-basket"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url"> Fresh vegetables & Meet</a></h6>
                            <p>Dive into fresh, flavorful perfection as vibrant veggies and premium meats unite on your table in a symphony of taste.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">World’s best Chef </a></h6>
                            <p>world-class culinary mastery, each bite a redefining masterpiece crafted by the globe's top chef.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mobile-left">
                    <img src="user/assets/images/burger1.png" class="img-fluid radius-image" alt="">
                </div>
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-cogs"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Best quality products</a></h6>
                            <p>Indulge in the pinnacle of quality - expertly crafted products designed to elevate your experience.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-motorcycle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Fastest door delivery</a></h6>
                            <p>Lightning-fast deliveries straight to your door, the ultimate in speed and convenience.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-thumbs-down"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Ground beef & Low fat</a></h6>
                            <p>Savor succulent, lean ground beef dishes bursting with flavor, guilt-free and oh-so-satisfying.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //mobile-info-->
    </div>
</section>
<!-- //mobile section --->
<!-- middle -->
<div class="middle py-5" id="call">
    <div class="container py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>The Right Ingredients
                for the Right Food. Eat Healthy, Delicious and Perfect Burgers From Our Hotel</h3>
            <h3 class="mt-4">Call us to order: <a href="tel:+1 123 456 789">+91 93132 34850</a> </h3>
            <a href="{{route('contact')}}" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2">Contact Us</a>
        </div>
    </div>
</div>
<!-- //middle -->
<!--  Work gallery section -->
<div class="w3l-gallery2" id="gallery">
    <div class="burger galleryks py-5">
      <div class="container py-lg-4 py-md-3">
        <h6 class="title-small text-center">Food Gallery</h6>
        <h3 class="title-big mb-lg-5 mb-4 text-center">Our Burger Gallery</h3>
        <div class="row no-gutters masonry">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g1.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="lion">
              <img src="user/assets/images/g1.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g2.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="camel">
              <img src="user/assets/images/g2.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g3.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="hippopotamus">
              <img src="user/assets/images/g3.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g4.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="koala">
              <img src="user/assets/images/g4.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g5.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="bear">
              <img src="user/assets/images/g5.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g6.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="rhinoceros">
              <img src="user/assets/images/g6.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g7.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="hippopotamus">
              <img src="user/assets/images/g7.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="user/assets/images/g8.jpg" class="js-img-viwer d-block" data-caption="The Right Ingredients for the Right Food."
              data-id="koala">
              <img src="user/assets/images/g8.jpg" class="img-fluid radius-image-full" alt="burger gallery" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>Delight your Best</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  //Work gallery section -->


<!-- features -->
<section class="w3l-reasons py-5" id="why">
    <div class="main-w3 py-lg-5 py-md-d py-2">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-small">Why we are the best</h6>
                <h3 class="title-big">4 Reasons to Choose us</h3>
            </div>
            <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                <div class="col-lg-3 col-sm-6 grids-feature">
                    <a href="#url" class="icon"><span class="fa fa-cutlery"></span></a>
                    <h4><a href="#feature" class="title-head">Tasty Burgers</a></h4>
                    <p>Dive into juicy perfection - sink your teeth into our irresistible, flavor-packed Tasty Burgers.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-cogs"></span></a>
                    <h4><a href="#feature" class="title-head">Quality Products</a></h4>
                    <p>our quality products meet the highest standards for your ultimate satisfaction.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-users"></span></a>
                    <h4><a href="#feature" class="title-head">World's best Chef</a></h4>
                    <p>world-class culinary mastery, each bite a redefining masterpiece crafted by the globe's top chef.</p>
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

<!-- app-4 
<section class="w3l-app-launch-4 py-5">
    <div id="app4-block" class="py-lg-5 py-md-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 app4-left-text">
                    <h5 class="title-small">Easy way to use mobile app</h5>
                    <h3 class="title-big">Download our mobile apps today</h3>
                    <p class="mt-3"> Suspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                        sapien. Proin a diam et dui fermentum molestie vel id neque. Donec sed tempus enim, 
                        a congue risus. euismod massa a quam interdum. </p>
                    <div class="download-btns mt-4 pt-lg-3">
                        <a href="#url"><img src="user/assets/images/appstore.png" class="radius-image" alt=""></a>
                        <a href="#url"><img src="user/assets/images/googleplay.png" class="radius-image" alt=""></a>
                    </div>
                    <span class="or"> or </span>
                    <div class="download-link">
                        <h5 class="mb-2">Enter your email to get download link</h5>
                        <form action="#" methos="GET" class="d-flex wrap-align">
                            <input type="email" placeholder="Enter email" required="required" />
                            <button type="submit">Get link</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 app4-right-image mt-lg-0 mt-md-5 mt-4">
                    <img src="user/assets/images/mobile.jpg" class="img-fluid radius-image-full" alt="App Device" />
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- footer -->
@include('user.common.footer')
<!-- //footer -->


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