<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Nasabah</title>
  </head>
  <body>
    <h1>Daftar Nasabah Disini</h1>

    <?php $__currentLoopData = $nasabah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nasabah1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li> <?php echo e($nasabah1->nama); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  </body>
</html>
