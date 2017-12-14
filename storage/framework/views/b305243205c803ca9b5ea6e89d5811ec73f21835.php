<?php $__env->startSection('title', 'Daftar Nasabah'); ?>

<?php $__env->startSection('content'); ?>
    <form class="/nasabahs" method="post">
      <input type="text" name="nama" placeholder="nama" required><hr>
      <input type="text" name="username" placeholder="username" required> <hr>
      <input type="text" name="alamat" placeholder="alamat" required> <hr>
      <input type="text" name="no_hp" placeholder="no_hp" required> <hr>
      <input type="submit" name="submit" value="Create">
      <?php echo e(csrf_field()); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>