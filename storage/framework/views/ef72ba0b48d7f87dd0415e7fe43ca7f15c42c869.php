<?php $__env->startSection('content'); ?>
<h1>Update Data Kategori lembur</h1>
    <?php echo Form::model($kategori_lemburs,['method' => 'PATCH','route'=>['kategori_lemburs.update',$kategori_lemburs->id]]); ?>

    <div class="form-group">
        <?php echo Form::label('Kode Lembur ', 'Kode Lembur :'); ?>

        <?php echo Form::text('Kode_lembur',null,['class'=>'form-control']); ?>

    </div>
     <div class="form-group">
        <?php echo Form::label('Jabatan', 'Jabatan:'); ?>

    </div>
      <select class="form-control" name="Kode_jabatan"><option>--Pilih Nama Jabatan--</option>
            <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

     <div class="form-group">
        <?php echo Form::label('Golongan', 'Golongan:'); ?>

    </div>
      <select class="form-control" name="Kode_golongan"><option>--Pilih Nama Golongan--</option>
            <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

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