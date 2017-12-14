<!DOCTYPE html>
<html>
<?php echo $__env->make("templates.partials.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <?php echo $__env->make("templates.partials.navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Left side column. contains the logo and sidebar -->
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
              <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Lihat Stok</a></li>
              <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Tambah Stok</a></li>
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
              <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Tambah Pengunjung</a></li>
              <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Edit Pengunjung</a></li>
              <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Grafik Pengunjung</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php echo $__env->make('templates.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php echo $__env->make('templates.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
