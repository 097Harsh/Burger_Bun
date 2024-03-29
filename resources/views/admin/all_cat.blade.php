<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>All Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

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
					<h2 class="title1">Manage Category</h2>
				
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>All categories</h4>
						@if(session('success'))
						<div class="alert alert-success" role="alert">
							Category Added
						</div>
						@elseif(session('cat_success'))
						<div class="alert alert-danger" role="alert">
							Category Deleted
						</div>
						@elseif(session('update'))
						<div class="alert alert-success" role="alert">
							Category Updated
						</div>
        				@endif
                        <a href="{{route('add_category')}}"><button class="btn btn-default" style="float:right;">Add Category</button></a>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>Category ID</th> 
                                    <th>Category Name</th> 
                                    <th colspan="2">Actions</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                @foreach($categorys as $category)
                                <tr> 
                                    <th scope="row">{{$category->cat_id}}</th> 
                                    <td>{{$category->cat_name}}</td> 
                                    <td colspan="2">
                                        <a href="{{ route('edit_category', ['cat_id' => $category->cat_id]) }}"><button class="btn btn-success">Edit</button></a><space>    </space>
                                        <a href="{{ route('delete_categroy', ['cat_id' => $category->cat_id]) }}"><button class="btn btn-danger">Delete</button></a>
                                    </td> 
                                </tr> 
                                @endforeach 
                            </tbody> 
                        </table>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		@include('admin.common.footer')
        <!--//footer-->
	</div>
	<!-- Ajax code on delete -->
	<script type="text/javascript">
	
	function deletepost(id)
	{

		if(confirm("Are you sure to delete this"))
		{

			$.ajaxSetup({

			headers:
			{

			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}

			});
			$.ajax({

				url:'delete_categroy/'+id,
				type:'DELETE',

				success:function(result)
				{
					$("#"+result['tr']).slideUp("slow");
				}


			});
		}
	}
	</script>
	<!-- side nav js -->
	<script src="{{asset('admin/js/SidebarNav.min.js')}}" type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
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