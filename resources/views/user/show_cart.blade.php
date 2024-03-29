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

    <title>All Events</title>

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
<div class="w3l-menublock py-5">
    <!-- menu block -->
    <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
        <div class="container">
            <h1 align="center">Product in cart</h1><br>
            <div class="row menu-body">
                <!-- Section starts: Appetizers -->
                <div class="col-lg-12">
                    <table class="table table-hover" style="float:center;">
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Quantity</td>
                            <td>Remove</td>
                        </tr>
                        @foreach($carts as $index => $cart)
                        
                        <tr id="row_{{$index}}">
                            <td>{{ $cart['name'] }}</td>
                            <td id="price_{{ $index }}">₹{{ $cart['price'] }}</td>
                            <td>
                                <a class="image-popup-vertical-fit" href="{{ asset('storage/admin/upload/' . $cart['p_image']) }}">
                                    <img src="{{ asset('storage/admin/upload/' . $cart['p_image']) }}" height="100%" width="100">
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-secondary btn-sm" onclick="updateQuantity({{ $index }}, 'decrease')">-</button>
                                <span id="quantity_{{ $index }}">{{ $cart['quantity'] }}</span>
                                <button class="btn btn-secondary btn-sm" onclick="updateQuantity({{ $index }}, 'increase')">+</button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="removeProduct({{ $index }})">Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @php
                        $totalPrice = 0;
                        foreach($carts as $index => $cart) {
                            $totalPrice += $cart['price'] * $cart['quantity'];
                        }
                    @endphp
                    <div>Total Price: ₹<span id="total_price">{{ $totalPrice }}</span></div>
                    <form method="post" action="{{route('select')}}">
                    @csrf
                        <input type="hidden" name="total_price" id="total_price" value="{{ $totalPrice }}">


                        <button class="btn btn-primary" type="submit" name="submit">Place Order</button>
                    </form>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    function updateQuantity(index, action) {
        let quantityElement = document.getElementById('quantity_' + index);
        let quantity = parseInt(quantityElement.innerText);

        if (action === 'increase') {
            quantity++;
        } else if (action === 'decrease') {
            if (quantity > 1) {
                quantity--;
            }
        }

        quantityElement.innerText = quantity;

        // Recalculate total price
        let totalPriceElement = document.getElementById('total_price');
        let totalPrice = parseFloat(totalPriceElement.innerText);
        let pricePerItem = parseFloat(document.getElementById('price_' + index).innerText.replace('₹', ''));

        if (action === 'increase') {
            totalPrice += pricePerItem;
        } else if (action === 'decrease') {
            totalPrice -= pricePerItem;
        }

        totalPriceElement.innerText = totalPrice.toFixed(2);
    }

    function removeProduct(index) {
        let row = document.getElementById('row_' + index); 
        row.parentNode.removeChild(row);
    }

    function placeOrder() {
        window.location.href = "{{route('select')}}";
    }
</script>



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