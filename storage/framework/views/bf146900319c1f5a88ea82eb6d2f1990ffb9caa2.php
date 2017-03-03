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
			<td><?php echo e($post->name); ?></td>
			<td>
				<?php echo Form::open(['route'=>['post.destroy',$post->id],'method'=>'DELETE']); ?>

				<?php echo link_to_route('post.edit',$title='Editar',$parameters = $post->id); ?>

				<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

				<?php echo Form::close(); ?>

			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
<?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>