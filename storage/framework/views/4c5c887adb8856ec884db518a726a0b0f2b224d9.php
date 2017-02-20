<?php $__env->startSection('contenido'); ?>
    <?php echo e(session('mensaje')); ?>

    <table class="table table-hoover">
        <tr>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorias): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($categorias->name); ?></td>
                <td>
                    <?php echo link_to_route('categorias.edit',$title='Editar',$parameters=$categorias->id); ?>

                    <?php echo Form::open(['route'=>['categorias.destroy',$categorias->id],'method'=>'DELETE']); ?>

                     <?php echo Form::submit('Eliminar'); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>