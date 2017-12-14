<?php $__env->startSection('title', 'Daftar Nasabah'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $nasabah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nasabah1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table">
      <td>
        <tr>
          <a href="/nasabah/<?php echo e($nasabah1->username); ?>"><?php echo e($nasabah1->nama); ?></a>
        </tr>
        <tr>
          <form action="/nasabah/<?php echo e($nasabah1->username); ?> " method="post">



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