<?php $__env->startSection('content'); ?>
<h1>Update Data Golongan</h1>
    <?php echo Form::model($golongans,['method' => 'PATCH','route'=>['golongans.update',$golongans->id]]); ?>

    <div class="form-group">
        <?php echo Form::label('Kode Golongan ', 'Kode Golongan :'); ?>

        <?php echo Form::text('Kode_golongan',null,['class'=>'form-control']); ?>

    </div>
     <div class="form-group">
        <?php echo Form::label('Nama Golongan', 'Nama Golongan:'); ?>

        <?php echo Form::text('Nama_golongan',null,['class'=>'form-control']); ?>

    </div>
     <div class="form-group">
        <?php echo Form::label('Besaran Uang', 'Besaran Uang:'); ?>

        <?php echo Form::text('Besaran_uang',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>