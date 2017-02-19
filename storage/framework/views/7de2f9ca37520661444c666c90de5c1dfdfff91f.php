<?php $__env->startSection('content'); ?>
 <h1><center>Jabatan</h1></center>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_jabatan" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_jabatan" placeholder="<?php echo e($jabatans->Kode_jabatan); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Nama_jabatan" class="col-sm-2 control-label">Nama Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Nama_jabatan" placeholder=<?php echo e($jabatans->Nama_jabatan); ?> readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder=<?php echo e($jabatans->Besaran_uang); ?> readonly>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="<?php echo e(url('jabatans')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>