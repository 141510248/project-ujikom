<?php $__env->startSection('content'); ?>



 <h1><center>Create Tunjangan</h1></center>
    <?php echo Form::open(['url' => 'tunjangans']); ?>


    <div class="form-group">
        <?php echo Form::label('Kode Tunjangan', 'Kode Tunjangan:'); ?>

        <?php echo Form::text('Kode_tunjangan',null,['class'=>'form-control']); ?>

    </div>

     <div class="form-group">
        <?php echo Form::label('Nama Jabatan', 'Nama Jabatan:'); ?>

    </div>
      <select class="form-control" name="jabatan_id"><option>--Pilih Nama Jabatan--</option>
            <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
       

    <div class="form-group">
        <?php echo Form::label('Nama Golongan', 'Nama Golongan:'); ?>

    </div>
      <select class="form-control" name="golongan_id"><option>--Pilih Nama Golongan--</option>
            <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
     
<div class="form-group">
        <?php echo Form::label('Status', 'Status:'); ?>

        <?php echo Form::text('Status',null,['class'=>'form-control']); ?>

    </div>
     

     <div class="form-group">
        <?php echo Form::label('Jumlah Anak', 'Jumlah Anak:'); ?>

        <?php echo Form::text('Jumlah_anak',null,['class'=>'form-control']); ?>

    </div>
     


     <div class="form-group">
        <?php echo Form::label('Besaran Uang', 'Besaran Uang:'); ?>

        <?php echo Form::text('Besaran_uang',null,['class'=>'form-control']); ?>

    </div>
     
   
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>