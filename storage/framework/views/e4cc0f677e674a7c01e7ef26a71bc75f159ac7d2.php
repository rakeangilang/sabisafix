

<?php $__env->startSection('content'); ?>

<?php use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator; ?>

<h1>Tambah Kunjungan Baru</h1>

<!-- if there are creation errors, they will show here -->
<?php echo e(HTML::ul($errors->all())); ?>


<div class="box">
    <div class="box-body">
<?php echo e(Form::open(array('url' => 'pengunjung'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('nama', 'Nama')); ?>

        <?php echo e(Form::text('nama', Input::old('nama'), array('class' => 'form-control', 'placeholder' => 'Nama rombongan'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('jumlah', 'Jumlah')); ?>

        <?php echo e(Form::number('jumlah', Input::old('jumlah'), array('class' => 'form-control', 'placeholder' => 'Jumlah pengunjung dalam rombongan'))); ?>

    </div>

    <div class="form-group">
        <div class='col-sm-4'>
        <?php echo e(Form::label('tanggal', 'Tanggal')); ?>

        <?php echo e(Form::date('tanggal', Input::old('tanggal'), array('class' => 'form-control', 'input-group date'))); ?>

        </div>
    </div>
</div>

    <?php echo e(Form::submit('Tambah', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.dashboard1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>