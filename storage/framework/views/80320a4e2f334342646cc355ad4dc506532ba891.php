<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Nasabah</title>
  </head>
  <body>
    <?php $__currentLoopData = $nasabah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nasabah1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <h1>Daftar Transaksi <?php echo e($nasabah1->nama); ?></h1>

    <h3><?php echo e($nasabah1->username); ?></h3>
    <h3><?php echo e($nasabah1->saldo); ?></h3>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h2>Pemasukan</h2>
    <?php $__currentLoopData = $transaksimasuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksimasuk1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><?php echo e($transaksimasuk1->jumlah); ?> |||||||| <?php echo e($transaksimasuk1->created_at); ?></h3>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h2>Pengeluaran</h2>
    <?php $__currentLoopData = $transaksikeluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksikeluar1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><?php echo e($transaksikeluar1->jumlah); ?> |||||||| <?php echo e($transaksikeluar1->created_at); ?></h3>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </body>
</html>
