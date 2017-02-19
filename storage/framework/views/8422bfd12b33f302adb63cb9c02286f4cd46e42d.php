<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Update Data Pegawai</div>
                <div class="panel-body">
                <hr>
                <?php echo Form::model($pegawais, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['pegawais.update', $pegawais->id], 'files' => true]); ?>


                    <div class="form-group<?php echo e($errors->has('Nip') ? ' has-error' : ''); ?>">
                        <label for="Nip" class="col-md-4 control-label">Kode Jabatan</label>
                        <div class="col-md-6">
                            <input type="text" name="Nip" class="form-control" value="<?php echo e($pegawais->Nip); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <label for="name" class="col-md-4 control-label">Nama Pegawai</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" value="<?php echo e($pegawais->User->name); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                        <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                            <select name="jabatan_id" class="form-control">
                                <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                            <select name="golongan_id" class="form-control">
                                <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group<?php echo e($errors->has('Photo') ? ' has-error' : ''); ?>">
                        <label for="Photo" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="<?php echo e(old('Photo')); ?>" required autofocus>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>