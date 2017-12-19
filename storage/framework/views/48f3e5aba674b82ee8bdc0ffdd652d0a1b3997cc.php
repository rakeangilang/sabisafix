

<?php $__env->startSection('content'); ?>

<?php use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator; ?>

<h1>Edit Riwayat Kunjungan</h1>

<!-- if there are creation errors, they will show here -->
<?php echo e(HTML::ul($errors->all())); ?>


<?php echo e(Form::model($pengunjung, array('route' => array('pengunjung.update', $pengunjung->id), 'method' => 'PUT'))); ?>


<div class="box">
<div class="box-body">
    <div class="form-group">
        <?php echo e(Form::label('nama', 'Nama')); ?>

        <?php echo e(Form::text('nama', $pengunjung->nama, array('class' => 'form-control', 'placeholder' => 'Nama rombongan'))); ?>

    </div>

     <div class="form-group">
        <?php echo e(Form::label('jumlah', 'Jumlah')); ?>

        <?php echo e(Form::number('jumlah', $pengunjung->jumlah, array('class' => 'form-control', 'placeholder' => 'Jumlah pengunjung dalam rombongan'))); ?>

    </div>

     <div class="form-group">
        <div class='col-sm-4'>
        <?php echo e(Form::label('tanggal', 'Tanggal')); ?>

        <?php echo e(Form::date('tanggal', Input::old('tanggal'), array('class' => 'form-control', 'input-group date'))); ?>

        </div>
    </div>
</div>
</div>

    <?php echo e(Form::submit('Ubah', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.dashboard1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>