<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <li <?php if($item->hasChildren()): ?>class ="drop"<?php endif; ?>> <?php echo $item->attributes(); ?>

        <?php if($item->link): ?> <a <?php if($item->hasChildren()): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif; ?> href="<?php echo e($item->url()); ?>">
            <?php echo $item->title; ?>

            <?php if($item->hasChildren()): ?> <b class="caret"></b> <?php endif; ?>
        </a>
        <?php else: ?>
            <?php echo e($item->title); ?>

        <?php endif; ?>
        <?php if($item->hasChildren()): ?>
            <ul class="dropdown-menu">
                <?php $__currentLoopData = $item->children(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <li><a href="<?php echo e($child->url()); ?>"><?php echo e($child->title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </ul>
        <?php endif; ?>
    </li>
    <?php if($item->divider): ?>
        <li<?php echo e(\HTML::attributes($item->divider)); ?>></li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>