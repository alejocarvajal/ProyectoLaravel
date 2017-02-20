 <div class="form-group">
     <?php echo Form::token(); ?>

     <?php echo Form::label('name','Nombre:'); ?>

     <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre aqui']); ?>

     <?php echo Form::label('email','Email:'); ?>

     <?php echo Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email aqui']); ?>

     <?php echo Form::label('password','Password:'); ?>

     <?php echo Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su password aqui']); ?>

     <br>
     <?php echo Form::submit('Enviar',['Class'=>'btn btn-primary']); ?>

</div>