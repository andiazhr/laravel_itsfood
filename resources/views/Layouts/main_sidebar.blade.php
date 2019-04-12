<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assetsadmin/dist/img/pemudaa.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{ url('home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('menu') }}"><i class="fa fa-circle-o"></i> Menu</a></li>
            <li><a href="{{ url('pembelian') }}"><i class="fa fa-circle-o"></i> Pembelian</a></li>
            <li><a href="{{ url('admins') }}"><i class="fa fa-circle-o"></i> Admins</a></li>
            <li><a href="{{ url('userspelanggan') }}"><i class="fa fa-circle-o"></i> Users Pelanggan</a></li>
            <li><a href="{{ url('saranmasukkan') }}"><i class="fa fa-circle-o"></i> Saran dan Masukkan</a></li>
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->