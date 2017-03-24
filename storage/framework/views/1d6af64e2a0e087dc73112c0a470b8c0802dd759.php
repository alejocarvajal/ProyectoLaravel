<div class="sidebar">
							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
				<a><?php echo e($nomCat[0]->name); ?></a>
									</li>
								</ul>
								<?php if(empty($postByCat[0])): ?>
			<p class="text-center">NO hay entradas para esta categoria</p>
								<?php else: ?>
								<div class="tab-content">
									<div class="tab-pane active" id="option1">
										<ul class="list-posts">
											<?php $__currentLoopData = $postByCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PBC): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
												<li>
					<?php if($PBC->path=='' || $PBC->path==null): ?>
					<img src="/upload/news-posts/listw1.jpg" alt="">
													<?php else: ?>
					<img src="/uploads/<?php echo e($PBC->path); ?>" style="width: 75px; height: 66px" />
													<?php endif; ?>



						
													<div class="post-content">
														<h2><a href="<?php echo e(route('post.show',$PBC->slug)); ?>"><?php echo e($PBC->title); ?></a></h2>
														<ul class="post-tags">
								<li>
								<i class="fa fa-clock-o"></i>
																<?php 
																	$date = new DateTime($PBC->created_at);
																	echo $date->format('d F Y');
																 ?>
															</li>
														</ul>
													</div>
												</li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
										</ul>
									</div>
								</div>

								<?php endif; ?>
							</div>
					</div>
