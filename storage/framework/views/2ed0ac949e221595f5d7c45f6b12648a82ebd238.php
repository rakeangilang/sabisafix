<?php $__env->startSection('title', 'Daftar Sampah Baru'); ?>

<?php $__env->startSection('content'); ?>
    <form class="/sampahs" method="post">
      <input type="text" name="jenis_sampah" placeholder="jenis sampah" required><hr>
      <input type="text" name="harga_sampah" placeholder="harga sampah" required> <hr>
      <input type="submit" name="submit" value="Create">
      <?php echo e(csrf_field()); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>