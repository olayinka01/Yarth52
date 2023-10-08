@extends('layouts.main')

@section('title')
Yarth: Artist-Profile
@yield('title')
@stop

@section('header')
	
    <!-- LOADING -->
	<div class="loading-container" id="loading">
		<div class="loading-inner">
			<span class="loading-1"></span>
			<span class="loading-2"></span>
			<span class="loading-3"></span>
		</div>
	</div>
	<!-- END LOADING -->

	<div class="wrap-page ">      

		<!-- HEADER -->
		<header class="header _2">
        
			
            <div class="container">

				<!-- HEADER CONTENT -->
				<div class="header-cn clearfix">

					
                    <!-- MINI CART -->
								<div class="mini-cart ">

						<!-- HEADER CART -->
									<div class="cart-head" id="cart-head">
										<label style="color:#CCCCCC;">MY CART <span>(3)</span></label>
										<p><span style="color:#CCCCCC;">Total:</span> $1600.00 <small>(3)</small></p>
										<span class="cart-count">3</span>
                                    
									</div>
						<!-- END HEADER CART -->

						<!-- CART CONTENT -->
								<div class="cart-cn">
									<ul class="cart-list">
								<li>
									<a href="#" class="img">
										<img src="{{URL::asset('images/cart/img-1.jpg')}}" alt="">
									</a>
									<div class="text">
										<div class="name">
											<a href="#">G.E.T. Anorak Jacket</a>
										</div>
										<span class="price">£132.49</span>
										<a href="#" class="delete"><img src="{{URL::asset('images/icon-delete.png')}}" alt=""></a>
									</div>
								</li>
								<li>
									<a href="#" class="img">
										<img src="{{URL::asset('images/cart/img-2.jpg')}}" alt="">
									</a>
									<div class="text">
										<div class="name">
											<a href="#">The North Face Adena Shirt</a>
										</div>
										<span class="price">£96.00</span>
										<a href="#" class="delete"><img src="{{URL::asset('images/icon-delete.png')}}" alt=""></a>
									</div>
								</li>
							</ul>
							<p class="cart-total">Total: <span>£383.49</span></p>
							<div class="cart-bt">
								<a href="shop-cart.html" class="btn btn-4 text-uppercase">View Cart</a>
								<a href="payment.html" class="btn btn-4 text-uppercase">CheckOut</a>
							</div>
						</div>
						<!-- END CART CONTENT -->

					</div>
					<!-- END MINI CART -->

					

					<!-- LOGO -->
					<div class="logo">
						<a href="index.html"><img src="{{URL::asset('images/logo-mine.png')}}" alt=""></a>
					</div>
					<!-- END LOGO -->

					<!-- MENU BAR -->
					<div id="menu-bar" class="menu-bar ">
						<span class="one"></span>
						<span class="two"></span>
						<span class="three"></span>
					</div>
					<!-- END MENU BAR -->

					<div class="clear"></div>
					
					<!-- NAVIGATION -->
					<nav class="navigation ">
						<ul class="menu">

							<li class=" ">

								<a href="{{URL::to('index')}}">Home</a>

							</li>


							<li class="menu-parent">

								<a href="#">Steps To Sell Your Art</a>

								</li>

							
							<li><a href="#">Art Education</a></li>

							<li><a href="#">Artist FAQ</a></li>
                            
                            

							
						</ul>
					</nav>
					<!-- END NAVIGATION -->
					<!-- SEARCH -->
					<div class="search-h">
						<div class="form">
							<form action="#">
								<input type="text" class="input-text" placeholder="Search...">
								<button class="search-btn" type="submit">Submit</button>
							</form>
						</div>
						<span class="icon-search" id="icon-search"></span>
					</div>
					<!-- END SEARCH -->
                    
				</div>
				<!-- END HEADER CONTENT -->

			</div>
		</header>
		<!-- END HEADER -->
@stop

@section('body')

		<section class="blog">
			<div class="container">
				<div class="row">
                	<div class="col-md-3">
						
						<!-- WIDGET CATEGORIES -->
                        
                        
						<aside class="widget widget_categories ">
							<h4 class="widget-title">Profile({{ Session::get('lastname') }} {{ Session::get('firstname') }})</h4>
							
                            <ul>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Message</a></li>
								<li><a href="{{URL::to('artist/upload')}}">Upload Artworks</a></li>
                                <li><a href="{{URL::to('artist/view-edit-artworks')}}">Edit Artworks</a></li>
                                <li><a href="{{URL::to('logout')}}">Logout</a></li>
								
							</ul>
						</aside>
						<!-- END WIDGET CATEGORIES -->

						<!-- WIDGET RECENT POST -->
						<aside class="widget widget_recent_entries ">
							<h4 class="widget-title">Latest Posts</h4>
							<ul>
								<li>
									<a href="blog-detail.html" class="post-thumb">
										<img src="images/blog/thumbnail/img-1.jpg" alt="">
									</a>
									<a href="blog-detail.html" class="post-name">Aliquam hendrerit pulvinar nisl gravida</a>
									<span class="post-date">March 18, 2014 </span>
								</li>
								<li>
									<a href="blog-detail.html" class="post-thumb">
										<img src="images/blog/thumbnail/img-2.jpg" alt="">
									</a>
									<a href="blog-detail.html" class="post-name">Praeent vehicula neget aliquam tempus</a>
									<span class="post-date">March 18, 2014 </span>
								</li>
								<li>
									<a href="blog-detail.html" class="post-thumb">
										<img src="images/blog/thumbnail/img-3.jpg" alt="">
									</a>
									<a href="blog-detail.html" class="post-name">Micenas placerat nibh non lorem fentum </a>
									<span class="post-date">March 18, 2014 </span>
								</li>
								<li>
									<a href="blog-detail.html" class="post-thumb">
										<img src="images/blog/thumbnail/img-4.jpg" alt="">
									</a>
									<a href="blog-detail.html" class="post-name">Integer feugiat suscipit sit amet</a>
									<span class="post-date">March 18, 2014 </span>
								</li>
							</ul>
						</aside>
						<!-- END WIDGET RECENT POST -->
						
						<!-- WIDGET ARCHIVE -->
						<aside class="widget widget_archive ">
							<h4 class="widget-title">Archives</h4>
							<ul>
								<li><a href="#">January 2014</a></li>
								<li><a href="#">February 2014</a></li>
								<li><a href="#">March 2014</a></li>
								<li><a href="#">April 2014</a></li>
								<li><a href="#">October 2013</a></li>
								<li><a href="#">September 2013</a></li>
								<li><a href="#">September 2013</a></li>
								<li><a href="#">August 2013</a></li>
							</ul>
						</aside>
						<!-- END WIDGET ARCHIVE -->
						
						<!-- WIDGET FOLLOW -->
						<aside class="widget widget_social_icons">
							<h4 class="widget-title">Follow Us</h4>
							<div class="social-icons">
								<a href="#" class="_1"><i class="fa fa-facebook"></i></a>
								<a href="#" class="_2"><i class="fa fa-twitter"></i></a>
								<a href="#" class="_3"><i class="fa fa-youtube"></i></a>
								<a href="#" class="_4"><i class="fa fa-linkedin"></i></a>
								<a href="#" class="_5"><i class="fa fa-pinterest"></i></a>
							</div>
						</aside>
						<!-- END WIDGET FOLLOW -->
						
						<!-- WIDGET TAG CLOUD -->
						<aside class="widget widget_tag_cloud ">
							<h4 class="widget-title">Popular Tags</h4>
							<div class="tag_cloud">
								<a href="#">Tops</a>
								<a href="#">Women</a>
								<a href="#">Uber-Jean</a>
								<a href="#">Menstyle</a>
								<a href="#">Dress</a>
								<a href="#">Gree Kids</a>
								<a href="#">Unai Skirts</a>
								<a href="#">Cristmas14</a>
								<a href="#">Tea</a>
								<a href="#">Iphone 6 Plus</a>
								<a href="#">Sexy</a>
								<a href="#">Bagarols</a>
								<a href="#">Black Friday</a>
								<a href="#">50% Off</a>
							</div>
						</aside>
						<!-- END WIDGET TAG CLOUD -->

						<!-- WIDGET PHOTO SLIDE -->
						<aside class="widget widget_photo_slide">
							<h4 class="widget-title">Photo Slider</h4>
							<div class="photo-slide">
								<div id="photo_slide">
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
								</div>
							</div>
						</aside>
						<!-- END WIDGET PHOTO SLIDE -->
					</div>
                    
					<div class="col-md-9">

						
						
						
						
						<!-- RESPOND -->
						<div id="respond" class="comment-respond ">

							<h3 class="comment-reply-title">Leave a Comment </h3>

							<form action="#">
								<div class="row">

									<div class="col-sm-6">
										<input name="name" type="text" placeholder="Name (required)" class="input-text">
									</div>

									<div class="col-sm-6">
										<input id="email" name="email" type="text" placeholder="Email (required)" class="input-text">
									</div>

									<div class="col-sm-12">
										<textarea name="comment" placeholder="Your Message (required)" class="textarea"></textarea>
									</div>

									<div class="col-sm-12">
										<input type="submit" class="btn btn-3 text-uppercase" value="Submit">
									</div>

								</div>
							</form>
						</div>
						<!-- END RESPOND -->

					</div>

					

				</div>
			</div>
		</section>
		<!-- BLOG -->

		
		<!-- FOOTER -->
		<footer class="dark">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-4">
						<h2 class="title-f">Information</h2>
						<ul class="ul-f">
							<li><a href="#">About us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms &amp; Condition</a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-4">
						<h2 class="title-f">Customer Care</h2>
						<ul class="ul-f">
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Status</a></li>
							<li><a href="#">Shipping Rates</a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-4">
						<h2 class="title-f">Our Newsletter</h2>
						<div class="letter-from">
							<form action="#">
								<input type="text" placeholder="Enter Email..." class="input-text">
								<button class="letter-btn"><i class="fa fa-play"></i></button>
							</form>
						</div>
						
						<div class="follow-f">
							<h2 class="title-f">Follow us</h2>
							<div class="follow-sc">
								<a href="#"><i class="fa  fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-youtube-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-b">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6 col-md-push-6 payment-icon">
							<a href="#"><img src="{{URL::asset('images/payment/icon-5.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-4.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-3.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-2.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-1.png')}}" alt=""></a>
						</div>

						<div class="col-md-6 col-md-pull-6 copyright">
							<p>
								&copy; 2018 <a href="http://yarth.com/" title="MegaDrupal">Young Art House</a> - All Rights Reserved.
							</p>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- END FOOTER -->

		<!-- SCROLL TOP -->
		<div id="scroll-top" class="_2">Scroll Top</div>
		<!-- END SCROLL TOP -->

	</div>

    @stop