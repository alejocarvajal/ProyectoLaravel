<?php $__env->startSection('contenido'); ?>
<h1 class='text-center'>Lista de entradas</h1>
<table  class="table table-hoover">
	<tr>
		<th>Nombre</th>
		<th>Slug</th>
		<th>Categoria</th>
		<th>Opciones</th>
	</tr>
	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($post->title); ?></td>
			<td><?php echo e($post->slug); ?></td>
			<td><?php echo e($post->id_cat); ?></td>
			<td><a href="">Editar</a></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>