<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Stok Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('sisabisa.index')); ?>"><i class="fa fa-circle-o"></i> Lihat Stok</a></li>
            <li><a href="<?php echo e(URL::to('sisabisa/create')); ?>"><i class="fa fa-circle-o"></i> Tambah Stok</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> History Stok</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Kunjungan Tamu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::to('pengunjung/create')); ?>"><i class="fa fa-circle-o"></i> Tambah Pengunjung</a></li>
            <li><a href="<?php echo e(route('pengunjung.index')); ?>"><i class="fa fa-circle-o"></i> Edit Pengunjung</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Grafik Pengunjung</a></li>
          </ul>
        </li>

        <?php if($role=='Administrator'): ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Daftar Karyawan</a></li>
            <li <?php if($active == 'post'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('post.pekerja')); ?>"><i class="fa fa-circle-o"></i>Tambah Karyawan</a></li>
          </ul>
        </li>
        <?php endif; ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
