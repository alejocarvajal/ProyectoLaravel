<div class="heading-news-box">
				<div class="container">
		<h1>Post recomendados</h1>
				</div>
				<div class="owl-wrapper">
					<div class="owl-carousel" data-num="4">
					<?php $__currentLoopData = $recomendados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recomendado): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<div class="item">
							<div class="news-post image-post">
								<div class="post-gallery">
									<?php if($recomendado->path=='' || $recomendado->path==null): ?>
								<img src="upload/news-posts/h9.jpg" alt="">
				                  <?php else: ?>
				                        <img src="/uploads/<?php echo e($recomendado->path); ?>" style="width: 337px; height: 361px"/>
				                  <?php endif; ?>
									<div class="hover-box">

										<div class="inner-hover">
								<a class="category-post" href="<?php echo e(route('categorias.show',$recomendado->CatSlug)); ?>"><?php echo e($recomendado->categoria); ?></a>
											<h2><a href="<?php echo e(route('post.show',$recomendado->slug)); ?>"><?php if($recomendado->privado == true): ?>
				<i class="fa fa-lock fa-2x"></i>
			<?php endif; ?><?php echo $recomendado->title; ?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php 
													$date = new DateTime($recomendado->created_at);
													echo $date->format('d F Y');
												 ?></li>
											</ul>
											<p>
												<?php echo substr($recomendado->content,0,100); ?>

											</p>
										</div>
							
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</div>
				</div>
</div>
