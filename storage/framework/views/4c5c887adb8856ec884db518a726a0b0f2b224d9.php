<?php $__env->startSection('contenido'); ?>
	<table class="table table-hover">
		<tr><th>Nombre</th><?php if(Auth::user()->id_rol<2): ?> <th>Opciones</th> <?php endif; ?></tr>
		<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($category->name); ?></td>
				<?php if(Auth::user()->id_rol<2): ?>
					<td>
					<?php echo link_to_route('categorias.edit',$title='Editar',$parameters=$category->id); ?>

					 
					 <?php echo Form::open(['route'=>['categorias.destroy',$category->id],'method'=>'DELETE']); ?>

						<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

					
				 	</td>
				<?php endif; ?>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
	<?php echo e($cats->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>