<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/AdminLTE')}}/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#">{{ucfirst(Auth::user()->level)}} - {{Auth::user()->email}}</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li><a href="{{route('admin.travel')}}"><i class="fa fa-edit"></i> <span>Data Travel</span></a></li>
        <li><a href="{{route('admin.booking')}}"><i class="fa fa-edit"></i> <span>Data Booking</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>