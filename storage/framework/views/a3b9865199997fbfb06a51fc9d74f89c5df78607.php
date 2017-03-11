<?php $__env->startSection('contenido'); ?>
<h1>Lista de archivos subidos</h1>
<table class="table table-hover">
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Ruta</th>
	</tr>
	<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td>
				<?php if($file->type=='PDF' || $file->type=='pdf'): ?>
					<img src="public/img/`pdf.png">
				<?php else: ?>
					<img src="uploads/<?php echo e($file->path); ?>" class="img-responsive" style="width: 80px">
				<?php endif; ?>
			</td>
			<td>
				<?php echo e($file->name); ?>

			</td>
			<td>
				<?php echo e($file->type); ?>

			</td>
			<td>
				<?php echo e($file->path); ?>

			</td>
			<td>
				<?php echo e(link_to_action('FilesController@destroy',$title='Eliminar',$parameters=$file->id)); ?>

			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>