<div class="row">
      <div class="col-xs-6 col-md-6">
            <a href="#" class="thumbnail" onclick="$('#miImagenInput').click()">
            <?php if(Auth::user()->path=='' || Auth::user()->path==null): ?>
            <img class="img-responsive"  id="mi_img" src="/img/default-image.png">
                  <?php else: ?>
            <img class="img-responsive"  id="mi_img" src="/uploads/<?php echo e(Auth::user()->path); ?>"/>
                  <?php endif; ?>
            </a>
      </div>
      <div class="col-xs-6 col-md-6">
            <?php echo Form::token(); ?>

            <?php echo Form::label('name', 'Nombre: '); ?>

            <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre aqui']); ?>


            <?php echo Form::label('email', 'Email: '); ?>

                  <?php echo Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su Email aqui']); ?>


            <?php echo Form::label('password', 'Password: '); ?>

            <?php echo Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su Email aqui']); ?>

            <?php echo Form::file('image',array('id' => 'miImagenInput', 'style' =>'display:none')); ?>



      </div>
</div>
