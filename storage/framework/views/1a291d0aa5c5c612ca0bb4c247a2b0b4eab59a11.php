

<?php $__env->startSection('content'); ?>

<h2> Daftar Riwayat Kunjungan </h2>

<div class="box">
  <div class="box-body">
                    <table class="table table-bordered">
                      <thead>
                         <tr>
                            <th>Tanggal kunjungan</th>
                            <th>Nama rombongan</th>
                            <th>Jumlah pengunjung</th>

                            
                        </tr>
                      </thead>
                      <tbody>
                    <?php $__currentLoopData = $kunjungans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kunjungan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($kunjungan->tanggal); ?></td>
                            <td><?php echo e($kunjungan->nama); ?></td>
                            <td><?php echo e($kunjungan->jumlah); ?></td>
                            <td>
                                <a class="btn btn-info" href="<?php echo e(URL::to('pengunjung/' . $kunjungan->id . '/edit')); ?>">Ubah</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                        </table>

                  </div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.dashboard1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>