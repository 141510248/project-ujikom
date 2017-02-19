<?php $__env->startSection('content'); ?>

<h1><center>Tunjangan</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('tunjangans/create')); ?>" class="btn btn-success">Create</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Kode Tunjangan</th>
<th>Kode Jabatan</th>
<th>Kode Golongan</th>
<th>Status</th>
<th>Jumlah Anak</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
<?php 
$no=1;
 ?>
<?php $__currentLoopData = $tunjangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
	<td><?php echo e($no++); ?></td>
	<td><?php echo e($data->Kode_tunjangan); ?></td>
	<td><?php echo e($data->Jabatan->Kode_jabatan); ?></td>
	<td><?php echo e($data->Golongan->Kode_golongan); ?></td>
	<td><?php echo e($data->Status); ?></td>
	<td><?php echo e($data->Jumlah_anak); ?></td>
	<td><?php echo e($data->Besaran_uang); ?></td>
	<td> <a href="<?php echo e(url('tunjangans',$data->id)); ?>" class="btn btn-primary">Read</a></td>
	<td> <a href="<?php echo e(route('tunjangans.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
	<td>
	<?php echo Form::open(['method'=>'DELETE','route'=>['tunjangans.destroy', $data->id]]); ?>


	<?php echo Form::Submit('Delete',['class'=>'btn btn-danger']); ?>


	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>