@php
                        $userId = session('user_id');
                        //echo "User ID: $userId";
                        //die();
@endphp
<!DOCTYPE HTML>
<html>
<head>
<title>Add Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
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
				<div class="forms">
					<h2 class="title1">Manage Food</h2>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Add Food  :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" action="{{url('/store_product/'.$userId)}}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="form-group"> 
                                        <label for="name" class="col-sm-2 control-label">  Name:</label> 
                                        <div class="col-sm-9"> 
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Add Product Name"> 
                                        </div> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="name" class="col-sm-2 control-label">  Price:</label> 
                                        <div class="col-sm-9"> 
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Add Product Price"> 
                                        </div> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="name" class="col-sm-2 control-label">  Description:</label> 
                                        <div class="col-sm-9"> 
                                            <textarea class="form-control" name="msg" id="msg" placeholder="Enter description about the product"></textarea> 
                                        </div> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="name" class="col-sm-2 control-label"> Upload Image:</label> 
                                        <div class="col-sm-9"> 
                                            <input type="file" class="form-control" id="p_image" name="p_image" placeholder="Add Product Image"> 
                                        </div> 
                                    </div> 
									<div class="form-group"> 
                                        <label for="name" class="col-sm-2 control-label"> Select Category:</label> 
										<div class="col-sm-9">
											<select class="form-control"  id="cat" name="cat">
												<option value="">--Select Category--</option>
												@foreach($categorys as $category)
													<option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
												@endforeach
											</select>
										</div> 
                                    </div> 
                                    <div class="col-sm-offset-2"> 
                                        <button type="submit" name="submit" id="submit" class="btn btn-default">Add</button> 
                                    </div> 
                                </form> 
							</div>
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
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
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
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js"> </script>
   
</body>
</html>