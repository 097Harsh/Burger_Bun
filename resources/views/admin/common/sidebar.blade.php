<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="{{route('dashboard')}}"> Burger Bun<span class="dashboard_text">dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN  MEnu</li>
              <li class="treeview">
                <a href="{{route('dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Manage Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('PendingOrder')}}"><i class="fa fa-angle-right"></i> Pending Order</a></li>
                  <li><a href="{{route('CompleteOrder')}}"><i class="fa fa-angle-right"></i> Completed Order</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="{{route('all_category')}}">
                <i class="fa fa-list-alt"></i>
                <span>Manage Categories</span>
                
                </a>
              </li>
              <li class="treeview">
                <a href="{{route('all_product')}}">
                <i class="fa fa-list-alt"></i>
                <span>Manage Food</span>
                
                </a>
              </li>
              <li class="treeview">
                <a href="{{route('all_users')}}">
                <i class="fa fa-users"></i>
                <span>Manage Users</span>
                
                </a>
              </li>
              <li class="treeview">
                <a href="{{route('All_bookings')}}">
                <i class="fa fa-calendar"></i>
                <span>Manage Table-Bookings</span>
                
                </a>
              </li>
             <!-- <li class="treeview">
                <a href="{{route('all_contact')}}">
                <i class="fa fa-book"></i>
                <span>Manage Contacts</span>
                
                </a>
              </li> -->
              <li class="treeview">
                <a href="{{route('all_feedback')}}">
                <i class="fa fa-comments-o"></i>
                <span>View Feed-Back</span>
                
                </a>
              </li>
              <!--
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
                  <li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
                  <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
                  <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
                </ul>
              </li>
			  <li>
                <a href="widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <small class="label pull-right label-info">08</small>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
                  <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
               <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox</a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                  <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                  <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                  <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                  <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                </ul>
              </li>
              -->
              <li class="treeview">
                <a href="{{route('logout')}}">
                <i class="fa fa-sign-out"></i> <span>logout</span>
                </a>
              </li>
              </ul>
                          
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>