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
<h1>Entrada: <?php echo e($post->title); ?></h1>
<span><?php echo e($post->create_at); ?></span>
<strong>Categoria:</strong><a href=""><?php echo e($post->categoria); ?></a>
<br>
<strong>Etiquetas </strong><?php echo e($post->tags); ?>

<br>
<br>
<?php echo $post->content; ?>



</body>
</html>