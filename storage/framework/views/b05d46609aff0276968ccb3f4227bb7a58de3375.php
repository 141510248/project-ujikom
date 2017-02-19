<?php $__env->startSection('content'); ?>
<h1>Update Data Lembur Pegawai</h1>
    <?php echo Form::model($lembur_pegawais,['method' => 'PATCH','route'=>['lembur_pegawais.update',$lembur_pegawais->id]]); ?>

   
     <div class="form-group">
        <?php echo Form::label('Kode Lembur', 'Kode Lembur:'); ?>

    </div>
      <select class="form-control" name="Kode_lembur_id"><option>--Pilih Kode Lembur--</option>
            <?php $__currentLoopData = $kategori_lemburs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
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
        <?php echo Form::label('Jumlah Jam', 'Jumlah Jam:'); ?>

        <?php echo Form::text('Jumlah_jam',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>