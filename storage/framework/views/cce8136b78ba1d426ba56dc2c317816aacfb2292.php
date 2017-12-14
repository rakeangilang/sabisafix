<!-- app/views/nerds/index.blade.php -->


<?php $__env->startSection('content'); ?>

<h1>Histori Perubahan Stok</h1>

<!-- will be used to show any messages -->
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<div class="box">
    <div class="box-body">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Waktu update</td>
            <td>Stok awal</td>
            <td>Stok akhir</td>
            <td>Diupdate oleh</td>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $historis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->updated_at); ?></td>
            <td><?php echo e($value->jumlahawal); ?></td>
            <td><?php echo e($value->jumlahakhir); ?></td>
            <td><?php echo e($value->pengubah); ?></td>

            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->



                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->


                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->


            </td>

            <!-- we will also add show, edit, and delete buttons -->
            

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
          



                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->


                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->

           

            
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.dashboard1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>