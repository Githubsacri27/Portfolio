
  

    <!-- Preloader -->
   

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
     

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{secure_url('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{secure_url('admin/home')}}" class="nav-link @if(Request::segment(2) == 'home') active @endif">
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{secure_url('admin/about')}}" class="nav-link @if(Request::segment(2) == 'about') active @endif">
                <i class="nav-icon fa fa-info-circle"></i>
                <p>
                  About
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{secure_url('admin/contact')}}" class="nav-link @if(Request::segment(2) == 'contact') active @endif">
                <i class="nav-icon fa fa-address-book"></i>
                <p>
                  Contact
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{secure_url('admin/works')}}" class="nav-link @if(Request::segment(2) == 'works') active @endif">
                <i class="nav-icon fas fa-blog "></i>
                <p>
                  Works
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{secure_url('admin/social_icon')}}" class="nav-link @if(Request::segment(2) == 'social_icon') active @endif">
                <i class="nav-icon fas fa-share-alt "></i>
                <p>
                  Social Icon
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{secure_url('admin/my_account')}}" class="nav-link @if(Request::segment(2) == 'my_account') active @endif">
                <i class="nav-icon fa fa-user"></i>
                <p>
                  My Account
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{secure_url('logout')}}" class="nav-link @if(Request::segment(2) == 'logout') active @endif">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>