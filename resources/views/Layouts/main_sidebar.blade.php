<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assetsadmin/dist/img/pemudaa.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Raden Andi Azhar Hakim</p>
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
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{('master')}}"><i class="fa fa-circle-o"></i>Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('makanan') }}"><i class="fa fa-circle-o"></i> Makanan</a></li>
            <li><a href="{{ url('minuman') }}"><i class="fa fa-circle-o"></i> Minuman</a></li>
            <li><a href="{{ url('pembelian') }}"><i class="fa fa-circle-o"></i> Pembelian</a></li>
            <li><a href="{{ url('users') }}"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="{{ url('users_pelanggan') }}"><i class="fa fa-circle-o"></i> Users Pelanggan</a></li>
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->