<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>All Events</title>
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
<script src="{{asset('admin/js/custom.js')}}"></script>
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
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
					<h2 class="title1">Manage Events</h2>
				
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>All Events</h4>
                        @if(session('success'))
						<div class="alert alert-success" role="alert">
						Event Request Accepted
						</div>
						@elseif(session('Rejected'))
						<div class="alert alert-danger" role="alert">
						Event Request Rejected
						</div>
						@elseif(session('Completed'))
						<div class="alert alert-success" role="alert">
						Event Request Completed
						</div>
        				@endif
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>Event ID</th> 
                                    <th>Title</th> 
                                    <th>User Name</th> 
                                    <th>Contact</th> 
                                    <th> Type</th> 
                                    <th> Date</th> 
                                    <th> Status</th> 
                                    <th>Actions</th>
                                    
                                </tr> 
                            </thead> 
                            <tbody> 
                               @foreach($events as $event)
                                <tr> 
                                    <th scope="row">{{$event->e_id}}</th> 
                                    <td>{{$event->title}}</td> 
                                    <td>{{$event->name}}</td> 
                                    <td>{{$event->contact}}</td> 
                                    <td>{{$event->e_type}}</td> 
                                    <td>{{$event->e_date}}</td> 
                                    <td>{{$event->status}}</td> 
                                    <td colspan="2">
                                        @if($event->status == 'Pending')
                                        <a href="{{ route('accept_event', ['e_id' => $event->e_id]) }}" class="btn btn-primary">Accept</a>
                                        <a href="{{ route('reject_event', ['e_id' => $event->e_id]) }}" class="btn btn-danger">Reject</a>
                                        @elseif($event->status == 'Accepted')
                                        <a href="{{ route('completed_event', ['e_id' => $event->e_id]) }}" class="btn btn-success">Completed</a>
                                        @endif
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody> 
                        </table>
						<!-- Pagination Links -->
						<div class="text-right"> <!-- Align pagination links to the right -->
							{{ $events->links()}}
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