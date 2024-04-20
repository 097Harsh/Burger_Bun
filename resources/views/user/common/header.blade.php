<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="{{route('home')}}">
              <img src="{{asset('user/assets/images/burger.png')}}" alt="burger logo"width="35px" /> Burger Bun
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item @@home__active">
                      <a class="nav-link" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="{{route('about')}}">About</a>
                  </li>
                
                    @php
                        $userId = session('user_id');
                        //echo "User ID: $userId";
                        //die();
                    @endphp
                    @if($userId)
                        <!-- If the user is authenticated, show the feedback link -->
                        <li class="nav-item @@feedback__active">
                            <a class="nav-link" href="{{ route('feedBack') }}">Feedback</a>
                        </li>
                        <li class="nav-item @@feedback__active">
                            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                        </li>
                        <li class="nav-item @@menu__active">
                            <a class="nav-link" href="{{ route('cart') }}"><i class="fa fa-shopping-cart" style="font-size:24px"></i></a>
                        </li>
                        <li class="nav-item @@menu__active">
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" style="font-size:24px;color:white;"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{url('/profile/'.$userId)}}">My Profile</a>
                                    <a class="dropdown-item" href="{{url('/myorder/'.$userId)}}">My Orders</a>
                                    <a class="dropdown-item" href="{{url('/table-booking/'.$userId)}}">My Bookings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </div>  
                            </div>
                        </li>
                        
                    @else
                        <!-- If the user is not authenticated, show the login link -->
                        <li class="nav-item @@login__active">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                  <!--/search-right
                  <div class="search-right">
                      <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                       search popup 
                      <div id="search" class="pop-overlay">
                          <div class="popup">
                              <h4 class="mb-3">Search here</h4>
                              <form action="error.html" method="GET" class="search-box">
                                  <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                      autofocus="">
                                  <button type="submit" class="btn btn-style btn-primary">Search</button>
                              </form>

                          </div>
                          <a class="close" href="#close">×</a>
                      </div>
                       /search popup 
                  </div>
                  //search-right-->
              </ul>
          </div>
          <!-- toggle switch for light and dark theme 
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
