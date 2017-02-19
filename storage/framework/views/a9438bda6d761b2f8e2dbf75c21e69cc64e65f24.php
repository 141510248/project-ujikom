<?php $__env->startSection('content'); ?>
<h1><center>Update Data Tunjangan Pegawai</h1></center>
    <?php echo Form::model($tunjangan_pegawais,['method' => 'PATCH','route'=>['tunjangan_pegawais.update',$tunjangan_pegawais->id]]); ?>

 
     <div class="form-group">
        <?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan:'); ?>

    </div>
      <select class="form-control" name="Kode_tunjangan_id"><option>--Pilih Nama Tunjangan--</option>
            <?php $__currentLoopData = $tunjangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

     <div class="form-group">
        <?php echo Form::label('Pegawai', 'Pegawai:'); ?>

    </div>
      <select class="form-control" name="pegawai_id"><option>--Pilih Nama Pegawai--</option>
            <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

    <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>