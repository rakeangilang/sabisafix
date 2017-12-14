<?php $__env->startSection('title', 'Daftar Sampah'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $sampah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sampah1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table style="width:100%">
      <td>
        <tr>
          <a href="/sampah/<?php echo e($sampah1->id); ?>"><?php echo e($sampah1->jenis_sampah); ?></a> <br>
          <a href="/sampah/<?php echo e($sampah1->id); ?>"><?php echo e($sampah1->harga_sampah); ?></a>
        </tr>
        <tr>
          <form action="/sampah/<?php echo e($sampah1->id); ?> " method="post">

            <input type="submit" name="submit" value="delete">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="DELETE">
          </form>
        </tr>

      </td>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>