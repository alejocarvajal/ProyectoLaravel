<?php $__env->startSection('contenido'); ?>
<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="block-content">
							<div class="single-post-box">
								<div class="title-post">
									<h1><?php echo e($post->title); ?> </h1>
									<ul class="post-tags">
								<li>
								<i class="fa fa-clock-o"></i>
								<?php echo e($post->created_at); ?>

								</li>
								<li>
									<i class="fa fa-file"></i>
									<a href="<?php echo e(route('categorias.show',$post->catSlug)); ?>"><?php echo e($post->categoria); ?></a>
								</li>
									</ul>
								</div>
								<div class="post-gallery">
									<?php if(empty($post->path)): ?>
							<img src="<?php echo e(url('upload/news-posts/single1.jpg')); ?>">
									<?php else: ?>
							<img src="/uploads/<?php echo e($post->path); ?>">
									<?php endif; ?>
								</div>

								<div class="post-content">
									<?php echo $post->content; ?>

								</div>

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<?php 
											$tags= explode(',',$post->tags);
										 ?>
										<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<li><a href="<?php echo e(url('tags',$tag)); ?>"><?php echo e($tag); ?></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>									
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
									</ul>
								</div>

								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
			<h1><span>Te podria interesar</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									<?php $__currentLoopData = $random; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ran): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

										<div class="item news-post image-post3">
											<?php if(empty($ran->path)): ?>
					<img src="/upload/news-posts/2.jpg" alt="">
											<?php else: ?>
					<img src="/uploads/<?php echo e($ran->path); ?>" style="width: 243px;height: 194px">
											<?php endif; ?>
											<div class="hover-box">
												<h2><a href="<?php echo e(route('post.show',$ran->slug)); ?>"><?php echo e($ran->title); ?></a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo e($ran->created_at); ?></li>
												</ul>
											</div>
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
									</div>
								</div>
								<!-- End carousel box -->

								<!-- contact form box -->
								<div class="contact-form-box">
									<?php echo $__env->make('front.comentarios', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</div>
								<!-- End contact form box -->
							</div>
							<!-- End single-post box -->
						</div>
						<!-- End block content -->
					</div>

					<div class="col-sm-4">
						<!-- sidebar -->
						<div class="sidebar">
							<?php echo $__env->make('front.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>
						<!-- End sidebar -->
					</div>

				</div>
			</div>
		</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>