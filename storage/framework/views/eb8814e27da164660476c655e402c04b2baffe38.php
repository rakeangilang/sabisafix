<?php $__env->startSection('title', 'Setor Sampah'); ?>

<?php $__env->startSection('content'); ?>
    <form class="" action="/setor" method="post">

      <h3>Username</h3>
      <input class="" type="text" name="nasabah_user" required><hr>
      <h3>Berat_Sampah</h3>
      <input class="" type="text" name="berat" required> <hr>
      <select    name="jenis_sampah">
        <?php $__currentLoopData = $sampah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sampah1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($sampah1->jenis_sampah); ?>"><?php echo e($sampah1->jenis_sampah); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select><hr>
      <input type="submit" name="submit" value="Create">
      <?php echo e(csrf_field()); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>