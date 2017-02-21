<?php $__env->startSection('contenido'); ?>
		<h1 class="text-center text-uppercase">Estos son los usuarios registrados</h1>
		<?php echo e(session('mensaje')); ?>

		<table class="table table-hover">
			<th>imagen</th>
			<th>nombre</th>
			<th>Email</th>
			<th>Opciones</th>
			<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<tr>
					<td>
						<?php if($usuario->path=='' || $usuario->path==null): ?>
						<img class='img-responsive' width='60px' src="/img/default-image.png"></td>
						<?php else: ?>
						<img class='img-responsive' width='60px' src="/uploads/<?php echo e($usuario->path); ?>"></td>
						<?php endif; ?>
					<td><?php echo e($usuario->name); ?></td>
					<td><?php echo e($usuario->email); ?></td>
					<td><?php echo link_to_route('admin.edit',$title='Editar',$parameters=$usuario->id,$atributes=['class'=>'btn btn-warning']); ?></td>
					<td>
					<?php echo Form::open(['route'=>['admin.destroy',$usuario->id],'method'=>'DELETE']); ?>

						<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</table>
		<a href="/admin/create" class="btn btn-info">Agregar usuario</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>