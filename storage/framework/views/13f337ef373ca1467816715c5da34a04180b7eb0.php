
<?php $__env->startSection('content'); ?>

<div class="row">

  <!-- Stok terbanyak -->
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3>65</h3>
        <p>Dummy</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a class="small-box-footer">Stok Terbanyak</a>
    </div>
  </div>
  <!-- ./col -->

  <!-- Pengunjung -->
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3>53</h3>
        <p>Dummy</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a class="small-box-footer">Pengujung Terbanyak Bulan ini</a>
    </div>
  </div>
  <!-- ./col -->

  <!-- Karyawan Aktif -->
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>44</h3>
        <p>Dummy</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a class="small-box-footer">Karyawan Aktif</a>
    </div>
  </div>
  <!-- ./col -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.dashboard1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>