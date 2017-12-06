<!--left-fixed -navigation-->
<div class=" sidebar" role="navigation">
        <div class="navbar-collapse">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <ul class="nav" id="side-menu">
        <li>
          <a href="index.html" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
        </li>

          <!-- /nav-second-level -->
        <li class="">
          <a href="#"><i class="fa fa-book nav_icon"></i>Pekerja<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse">
            <li>
              <a href="{{ route('post.pekerja')}}">Tambah Pekerja</a>
            </li>
            <li>
              <a href="#">Daftar Pekerja</a>
            </li>
          </ul>

          <!-- //nav-second-level -->
        </li>
        <li>
          <a href="#"><i class="fa fa-file-text-o nav_icon"></i>Stok Barang<span class="dropdown"></span></a>
          <ul class="nav nav-second-level collapse">
          </ul>
          <!-- //nav-second-level -->
        </li>
        <li>
          <a href="charts.html" class="chart-nav"><i class="fa fa-bar-chart nav_icon"></i>Charts</a>
        </li>
      </ul>
      <!-- //sidebar-collapse -->
    </nav>
  </div>
</div>
<!--left-fixed -navigation-->
