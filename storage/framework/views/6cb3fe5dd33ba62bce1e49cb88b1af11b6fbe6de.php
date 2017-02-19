<?php $__env->startSection('content'); ?>



 <h1><center>Create Tunjangan Pegawai</h1></center>
    <?php echo Form::open(['url' => 'tunjangan_pegawais']); ?>


     <div class="form-group">
        <?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan:'); ?>

    </div>
      <select class="form-control" name="Kode_tunjangan_id"><option>--Pilih Kode Tunjangan--</option>
            <?php $__currentLoopData = $tunjangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
       

    <div class="form-group">
        <?php echo Form::label('Nama Pegawai', 'Nama Pegawai:'); ?>

    </div>
      <select class="form-control" name="pegawai_id"><option>--Pilih Nama Pegawai--</option>
            <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>