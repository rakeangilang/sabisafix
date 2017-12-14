<!DOCTYPE html>
<html>
<?php echo $__env->make("templates.partials.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <?php echo $__env->make("templates.partials.navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $__env->make("templates.partials.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
