<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">

								<div class="title-section">
			<h1><span>Ultima historia</span></h1>
								</div>

								<ul class="category-filter-posts">
			<li><a class="active" href="#">All</a></li>
									<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cats): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<li><a href="<?php echo e(route('categorias.show',$cats->slug)); ?>"><?php echo e($cats->name); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								</ul>

									<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<?php if($loop->first): ?>
											<div class="news-post standard-post2">
												<div class="post-gallery">
												<?php if(empty($post->path)): ?>
													<img src="/upload/news-posts/1.jpg" alt="">
												<?php else: ?>
				<img src="/uploads/<?php echo e($post->path); ?>" alt="" style="width: 750px; height: 195px;">
												<?php endif; ?>													
												</div>
												<div class="post-title">
													<h2><a href="<?php echo e(route('post.show',$post->slug)); ?>"><?php echo e($post->title); ?></a></h2>
													<ul class="post-tags">
			<li><i class="fa fa-clock-o"></i><?php 
															$date = new DateTime($post->created_at);
															echo $date->format('d F Y');
										 ?></li>
													</ul>
											</div>
											</div>
											</div>
											<!-- End grid box -->
											<!-- article box -->
											<div class="article-box">
												<div class="title-section">
		<h1><span>Ultimos Posts</span></h1>
												</div>
										<?php else: ?>
												<div class="news-post article-post">
													<div class="row">
														<div class="col-sm-4">
															<div class="post-gallery">
																<?php if(empty($post->path)): ?>
					<img alt="" src="/upload/news-posts/art1.jpg">
																<?php else: ?>
					<img src="/uploads/<?php echo e($post->path); ?>" alt="" style="width: 229px; height: 127px;">
																<?php endif; ?>
															</div>
														</div>
														<div class="col-sm-8">
															<div class="post-content">
																<h2><a href="<?php echo e(route('post.show',$post->slug)); ?>"><?php echo e($post->title); ?></a></h2>
																<ul class="post-tags">
					<li><i class="fa fa-clock-o"></i><?php 
																		$date = new DateTime($post->created_at);
																		echo $date->format('d F Y');
									 ?></li>
																</ul>
																<p>
																		<?php echo substr($post->content, 0,100); ?>

																</p>
															</div>
														</div>
	</div>
										</div>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
									</div>
											<div class="center-button">
												<?php echo e($posts->links()); ?>

											</div>
											</div>
								


							
