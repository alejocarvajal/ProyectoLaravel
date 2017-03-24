<?php $__env->startSection('contenido'); ?>
		
		<!-- End Header -->

		<!-- ticker-news-section
			================================================== -->
		<section class="heading-news3">
			<?php echo $__env->make('front.recomendados', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</section>

		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<?php echo $__env->make('front.contenido', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>

					<div class="col-sm-4">	
						<?php echo $__env->make('front.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>

				</div>
			</div>
		</section>
		<!-- End block-wrapper-section -->
		<!-- footer================================================== -->
		<footer>
			<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>