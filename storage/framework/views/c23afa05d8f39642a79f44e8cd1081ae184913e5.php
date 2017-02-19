<?php $__env->startSection('content'); ?>

<?php echo Form::close(); ?>


 <h1><center>Create Jabatan</h1></center>
    <?php echo Form::open(['url' => 'jabatans']); ?>

    <div class="form-group">
        <?php echo Form::label('Kode Jabatan', 'Kode Jabatan:'); ?>

        <?php echo Form::text('Kode_jabatan',null,['class'=>'form-control']); ?>

    </div>

     <div class="form-group">
        <?php echo Form::label('Nama Jabatan', 'Nama Jabatan:'); ?>

        <?php echo Form::text('Nama_jabatan',null,['class'=>'form-control']); ?>

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