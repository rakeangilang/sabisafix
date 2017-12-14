<?php $__env->startSection('title', 'Tarik Sampah'); ?>

<?php $__env->startSection('content'); ?>
    <form class="" action="/tarik" method="post">

      <h3>Username</h3>
      <input class="" type="text" name="nasabah_user" required><hr>
      <h3>Jumlah Yang Ditarik</h3>
      <input class="" type="text" name="jumlah" required> <hr>

      <input type="submit" name="submit" value="Create">
      <?php echo e(csrf_field()); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>