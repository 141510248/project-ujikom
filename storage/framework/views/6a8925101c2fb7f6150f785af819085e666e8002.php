<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('pegawais')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                         <div class="form-group<?php echo e($errors->has('permission') ? ' has-error' : ''); ?>">
                            <label for="permission" class="col-md-4 control-label">permission</label>

                            <div class="col-md-6">
                                <input id="permission" type="permission" class="form-control" name="permission" value="<?php echo e(old('permission')); ?>" required autofocus>

                                <?php if($errors->has('permission')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('permission')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<?php echo Form::open(['url' => 'pegawais']); ?>

        <div class="panel-heading"><center>Pegawai</div></center>
        <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('pegawais')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('Nip') ? ' has-error' : ''); ?>">
                <label for="Nip" class="col-md-4 control-label">NIP</label>

                <div class="col-md-6">
                    <input id="Nip" type="text" class="form-control" name="Nip" value="<?php echo e(old('Nip')); ?>" required autofocus>

                     <?php if($errors->has('Nip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Nip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




            <div class="form-group<?php echo e($errors->has('jabatans') ? ' has-error' : ''); ?>">
                <label for="jabatans" class="col-md-4 control-label">Jabatan</label>

                <div class="col-md-6">
                  

                     <?php if($errors->has('jabatans')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jabatans')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            <select class="form-control" name="Kode_jabatan"><option>--Pilih Nama Jabatan--</option>
            <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('golongans') ? ' has-error' : ''); ?>">
                <label for="golongans" class="col-md-4 control-label">Golongan</label>

                <div class="col-md-6">
                   

                     <?php if($errors->has('golongans')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('golongans')); ?></strong>
                                    </span>
                                <?php endif; ?>
                             <select class="form-control" name="Kode_golongan"><option>--Pilih Nama Golongan--</option>
            <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div> 
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>