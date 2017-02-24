<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/metisMenu.min.css'); ?>

    <?php echo Html::style('css/sb-admin-2.css'); ?>

    <?php echo Html::style('css/font-awesome.min.css'); ?>

</head>
<body>
<h1>BIENVENIDO</h1>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<h1><?php echo $post->title; ?></h1>
<span><?php echo $post->created_at; ?></span>
<p><?php echo substr($post->content,0,220); ?></p>
<a href="<?php echo e(route('post.show',$post->slug)); ?>">Ver Entrada</a>
<hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</body>
</html>