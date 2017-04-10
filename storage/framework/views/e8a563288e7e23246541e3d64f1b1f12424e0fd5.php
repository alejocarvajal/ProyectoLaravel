<?php $__env->startSection('contenido'); ?>
		
		
		<h1 class="text-center text-uppercase">Estos son los usuarios registrados</h1>
		<div class="form-inline">
			<?php echo Form::model(Request::all(),['route'=>'admin.index','method'=>'get']); ?>

			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="Buscar.."></input>
				<?php echo Form::select('type',$roles,null,['class'=>'form-control','placeholder'=>'Seleccione rol de su usuario']); ?>

				<?php echo Form::submit('Buscar',['class'=>'btn btn-info']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
		<hr>
		<table class="table table-hover">
			<th>Imagen</th><th>nombre</th><th>Rol</th><th>Email</th><th>Opciones</th>
			<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>
					<?php if($usuario->path=='' || $usuario->path==null): ?>
					<img class="img-responsive" style="width: 60px;" src="/img/default-image.png">
					<?php else: ?>
					<img class="img-responsive" style="width: 60px;" src="uploads/<?php echo e($usuario->path); ?>"/>
					<?php endif; ?>
					</td>
					<td><?php echo e($usuario->name); ?></td>
					<td><?php echo e($usuario->id_rol); ?></td>
					<td><?php echo e($usuario->email); ?></td>
					<td>
						<?php echo link_to_route('admin.edit',$title='Editar',$parameters = $usuario->id, $attributes=['class'=>'btn btn-warning']); ?>

					</td>
					<td>
						<?php echo Form::open(['route'=>['admin.destroy',$usuario->id],'method'=>'DELETE']); ?>

							<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

						<?php echo Form::close(); ?>

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>

		<?php echo e($usuarios->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>