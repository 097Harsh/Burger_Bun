<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>All Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<!-- Custom CSS -->
<link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href="{{ asset('admin/css/SidebarNav.min.css') }}" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('admin/js/modernizr.custom.js') }}"></script>
<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
<script src="{{('admin/js/custom.js')}}"></script>
<link href="{{('admin/css/custom.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		@include('admin.common.sidebar')
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		@include('admin.common.header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Manage Food</h2>
				
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>All Food</h4>
						@if(session('success'))
						<div class="alert alert-success" role="alert">
						Food Added
						</div>
						@elseif(session('deleted'))
						<div class="alert alert-danger" role="alert">
						Food Deleted
						</div>
						@elseif(session('update'))
						<div class="alert alert-success" role="alert">
						Food Updated
						</div>
        				@endif
                        <a href="{{route('add_product')}}"><button class="btn btn-default" style="float:right;">Add Product</button></a>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>Food ID</th> 
                                    <th>Name</th> 
                                    <th>Category</th> 
                                    <th>Price</th>
                                    <th>Description</th> 
                                    <th>Image</th> 
                                    <th colspan="2">Actions</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
							@foreach($pro as $product)
                                <tr> 
                                    <th scope="row">{{$product->p_id}}</th> 
                                    <td>{{$product->p_name }}</td> 
                                    <td>{{$product->cat_name }}</td> 
                                    <td>{{$product->price }}</td> 
                                    <td>{{$product->description }}</td> 
                                    <td>
										<a class="image-popup-vertical-fit" href="{{ asset('storage/admin/upload/' . $product->p_image) }}">
											<img src="{{ asset('storage/admin/upload/' . $product->p_image) }}" width="100" height="100">
										</a>
									</td> 
                                    <td colspan="2">
                                        <a href="{{ route('updateproduct', ['p_id' => $product->p_id]) }}"><button class="btn btn-success">Edit</button></a><space>    </space>
                                        <a href="{{ route('delete_product', ['p_id' => $product->p_id]) }}"><button class="btn btn-danger" data-item-id="{{ $product->p_id }}">Delete</button></a>
                                    </td> 
                                </tr> 
                               @endforeach
                            </tbody> 
                        </table>
						<!-- Pagination Links -->
						<div class="text-right"> <!-- Align pagination links to the right -->
							{{ $pro->links()}}
						</div>

					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		@include('admin.common.footer')
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src="{{asset('admin/js/SidebarNav.min.js')}}" type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	<!-- Magnificien pop-up on food image-->

	<script>
		$(document).ready(function() {
			$('.image-popup-vertical-fit').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				closeBtnInside: false,
				fixedContentPos: true,
				mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
				image: {
					verticalFit: true
				},
				zoom: {
					enabled: true,
					duration: 300 // don't foget to change the duration also in CSS
				}
			});
		});
	</script>


	<!-- Classie --><!-- for toggle left push menu script -->
	<script src="{{asset('admin/js/classie.js')}}"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('admin/js/scripts.js')}}"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('admin/js/bootstrap.js')}}"> </script>
	
</body>
</html>