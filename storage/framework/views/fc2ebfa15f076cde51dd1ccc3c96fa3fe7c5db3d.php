<!-- app/views/nerds/edit.blade.php -->



<?php $__env->startSection('content'); ?>

<h1>Ubah Stok <?php echo e($sisabisa->Nama); ?></h1>

<!-- if there are creation errors, they will show here -->
<?php echo e(HTML::ul($errors->all())); ?>


<?php echo e(Form::model($sisabisa, array('route' => array('sisabisa.update', $sisabisa->id), 'method' => 'PUT'))); ?>


<div class="box">
<div class="box-body">
    <div class="form-group">
        <?php echo e(Form::label('stok', 'Stok')); ?>

        <?php echo e(Form::number('stok', $sisabisa->Stok, array('class' => 'form-control', 'placeholder' => 'Stok saat ini'))); ?>

    </div>
</div>
</div>

    <?php echo e(Form::submit('Ubah', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.dashboard1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>