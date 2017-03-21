<div class="heading-news-box">
				<div class="container">
					<h1>Post Recomendados</h1>
				</div>
				<div class="owl-wrapper">
					<div class="owl-carousel" data-num="4">
					@foreach ($recomendados as $recomendado)
						<div class="item">
							<div class="news-post image-post">
								<div class="post-gallery">
									@if($recomendado->path=='' || $recomendado->path==null)
								<img src="upload/news-posts/h9.jpg" alt="">
				                  @else
				                        <img src="/uploads/{{$recomendado->path}}" style="width: 337px; height: 361px"/>
				                  @endif
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post" href="game-category.html">{{ $recomendado->categoria }}</a>
											<h2><a href="{{ route('post.show',$recomendado->slug) }}">{!! $recomendado->title !!}</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>@php
													$date = new DateTime($recomendado->created_at);
													echo $date->format('d F Y');
												@endphp</li>
											</ul>
											<p>
												{!! substr($recomendado->content,0,100) !!}
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					</div>
				</div>
</div>
