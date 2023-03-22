<header class="main-header">
    <!-- Logo -->
    <a href="{{asset('assets/AdminLTE')}}/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>{{env('APP_NAME')}}</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{env('APP_NAME')}}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('assets/AdminLTE')}}/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('assets/AdminLTE')}}/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                {{Auth::user()->name}} - {{ucfirst(Auth::user()->level)}}
                  <small>Member since {{Auth::user()->created_at->format('M Y')}}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="">
                  <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat btn-block"><i class="fa fa-sign-out"></i> Logout</a>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>