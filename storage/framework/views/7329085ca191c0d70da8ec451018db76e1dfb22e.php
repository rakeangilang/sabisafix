<html>

   <head>
      <title><?php echo $__env->yieldContent('title'); ?></title>
   </head>

   <body>
      <?php $__env->startSection('sidebar'); ?>
      This is the master sidebar.
      <?php echo $__env->yieldSection(); ?>

      <div class = "container">
         <?php echo $__env->yieldContent('content'); ?>
      </div>

   </body>
</html>


<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('sidebar'); ?>
   ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
      <p>This is appended to the master sidebar.</p>
   <?php $__env->stopSection(); ?>

   <?php $__env->startSection('content'); ?>
      <h2><?php echo e($name); ?></h2>
      <p>This is my body content.</p>
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>