<?php $__env->startSection('content'); ?>
 <h1><center>Kategori Lembur</h1></center>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_lembur" class="col-sm-2 control-label">Kode Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_lembur" placeholder="<?php echo e($kategori_lemburs->Kode_lembur); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="<?php echo e($kategori_lemburs->Jabatan->Kode_jabatan); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Nama Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="<?php echo e($kategori_lemburs->Jabatan->Nama_jabatan); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Kode Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="<?php echo e($kategori_lemburs->Golongan->Kode_golongan); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="<?php echo e($kategori_lemburs->Golongan->Nama_golongan); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="<?php echo e($kategori_lemburs->Besaran_uang); ?>" readonly>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="<?php echo e(url('kategori_lemburs')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>