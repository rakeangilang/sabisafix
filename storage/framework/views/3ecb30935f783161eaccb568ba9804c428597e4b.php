<?php $__env->startSection('title', 'Record Transaksi'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $transaksimasuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksimasuk1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table">
      <td>

        <tr>
            <th><?php echo e($transaksimasuk1->nasabah_user); ?> </th>
            <th><?php echo e($transaksimasuk1->jenis); ?></th>
            <th><?php echo e($transaksimasuk1->berat); ?></th>
            <td><?php echo e($transaksimasuk1->jumlah); ?></td>
            <td><?php echo e($transaksimasuk1->created_at); ?></td>
        </tr>

      </td>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $transaksikeluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksikeluar1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table">
      <td>

        <tr>

            <th><?php echo e($transaksikeluar1->nasabah_user); ?> </th>
            <td><?php echo e($transaksikeluar1->jumlah); ?></td>
            <td><?php echo e($transaksikeluar1->created_at); ?></td>
        </tr>

      </td>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>