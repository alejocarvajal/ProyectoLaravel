@extends('front.principal')

@section('contenido')
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
						</div>
					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">

								<li><a class="active" href="index.html">Home</a></li>
								<li><a href="game-category.html">News</a></li>
								<li class="drop-arrow"><a href="game-category.html">Reviews</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown">

												<div class="owl-wrapper">
													<div class="owl-carousel" data-num="5">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st1.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st2.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st3.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st4.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st5.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>
								<li><a href="game-category.html">Video</a></li>
								<li><a href="game-category.html">Xbox One</a></li>
								<li class="drop-arrow"><a href="game-category.html">PS 4</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown">

												<div class="owl-wrapper">
													<div class="owl-carousel" data-num="5">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st1.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st2.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st3.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st4.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/st5.jpg" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>
								<li><a href="game-category.html">Wii U</a></li>
								<li><a href="game-category.html">Pc</a></li>
								<li><a href="game-category.html">Mobile Gaming</a></li>
								<li class="drop-arrow drop"><a href="games-category.html">More</a>
									<ul class="dropdown">
										<li><a href="game-category.html">Nintendo</a></li>
										<li><a href="game-category.html">App Games</a></li>
									</ul>
								</li>

							</ul>
							<form class="navbar-form navbar-right" role="search">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>
		<!-- End Header -->

		<!-- ticker-news-section
			================================================== -->
		<section class="heading-news3">
			@include("front.recomendados")
		</section>

		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">

								<div class="title-section">
									<h1><span>Top Stories</span></h1>
								</div>

								<ul class="category-filter-posts">
									<li><a class="active" href="#">All</a></li>
									<li><a href="#">Xbox one</a></li>
									<li><a href="#">PS4</a></li>
									<li><a href="#">WII U</a></li>
									<li><a href="#">PC</a></li>
								</ul>

								<div class="news-post standard-post2">
									<div class="post-gallery">
										<img src="upload/news-posts/1.jpg" alt="">
										<div class="rate-level">
											<p><span>9.5</span> Amazing</p>
										</div>
									</div>
									<div class="post-title">
										<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
											<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End grid box -->
							<!-- article box -->
							<div class="article-box">
								<div class="title-section">
									<h1><span>Latest Articles</span></h1>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-4">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art1.jpg">
											</div>
										</div>
										<div class="col-sm-8">
											<div class="post-content">
												<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-4">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art2.jpg">
											</div>
										</div>
										<div class="col-sm-8">
											<div class="post-content">
												<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-4">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art3.jpg">
											</div>
										</div>
										<div class="col-sm-8">
											<div class="post-content">
												<h2><a href="single-post.html">Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-4">
											<div class="post-gallery">
												<img alt="" src="upload/news-posts/art4.jpg">
											</div>
										</div>
										<div class="col-sm-8">
											<div class="post-content">
												<h2><a href="single-post.html">Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
												<p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="center-button">
									<a href="#">Show me more</a>
								</div>
							</div>
							<!-- End article box -->
						</div>
						<!-- End block content -->
					</div>
					@include("front.sidebar")
				</div>
			</div>
		</section>
		<!-- End block-wrapper-section -->
		<!-- footer================================================== -->
		<footer>
			@include("front.footer")
		</footer>
		<!-- End footer -->
@endsection