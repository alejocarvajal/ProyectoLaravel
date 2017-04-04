<?php $__env->startSection('contenido'); ?>
<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contact-info-box">
							<div class="title-section">
								<h1><span>Contact Us</span></h1>
							</div>
							<div id="map"><?php echo Mapper::render(); ?></div>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>

						</div>
						
						<div class="contact-form-box">
							<div class="title-section">
								<h1><span>Escribenos tu Opinion</span></h1>
							</div>
							<?php echo $__env->make('front.forms.contactForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="sidebar">
							<?php echo $__env->make('front.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>
					</div>

				</div>
			</div>
		</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>