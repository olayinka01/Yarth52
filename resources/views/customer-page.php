@extends('layouts.main')

@section('title')
Yarth: Home
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
    
     <!-- TOP MENU -->
    
    				
				<div class="container" >
                    <div class="header-cn clearfix" style="background-color:#252525;">
                    
						<nav class=" nav" style="float:right;">
						
							<ul class="top-menu">
                            
								
                                @if(Session::has('firstname'))
								<li class="top-menu" >
					<p style="font-size:14px;margin-top:2%;color:white !important">Logged in as {{ Session::get('firstname') }}&nbsp;&nbsp; <a href="{{URL::to('logout')}}" style="color:color:white !important"> Logout </a> </p>
								  </li>
						     @else
                             <li class="top-menu" >
                                <a href="{{URL::to('customer-login-register')}}"><strong>Customer Login</strong></a></li>
                            </ul>
                           
                            <ul class="top-menu">
								<li class="top-menu hidden-xs"><a href="#"><strong>Artist Login</strong></a></li>
                            </ul>
                            <ul class="top-menu">
								<li class="top-menu hidden-xs"><a href="#"><strong>Sell Artistic Tools</strong></a></li>
                            </ul>
                            @endif
                            
                            <ul class="top-menu">
                            	<li class="top-menu">
							
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
                    	</li>
                    	</ul>
                            
                      </nav>
	
					</div>
      </div>
					<!-- END TOP MENU -->
                

		<!-- HEADER -->
		<header class="header _2">
        
			
            <div class="container">

				<!-- HEADER CONTENT -->
				<div class="header-cn clearfix">

					

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

			</div>
		</header>
		<!-- END HEADER -->
@stop

@section('body')
		<!-- SLIDER -->
		<section class="slide _1">
			<div class="container">
				<div class="slide-cn _1" id="slide-home">
					<!-- SLIDE ITEM -->
					<div class="slide-item ">
						<div class="item-inner">
							<div class="text">
							   	<h2>
							   		<span>Enjoy the Latest</span> Men’s <br>
									Fall Collection 2015
								</h2>
							   
							   	<p>
							   		Lorem ipsum dolor sit amet conse cotetur ullamco laboris <br> sedo eiusmod tempor labore dalore aliqua. 
							   	</p>
							   
						   		<div class="group">
						   			<a href="#" class="btn btn-8">Shop Now</a>
						   		</div>
				   			</div>

						   	<div class="img">
					   			<img src="{{URL::asset('images/slide/img-1.png')}}" alt="">
				   			</div>
			   			</div>

			   		</div>	
			   		<!-- SLIDE ITEM -->		

			   		<!-- SLIDE ITEM -->
					<div class="slide-item ">
						<div class="item-inner">
							<div class="text">
							   	<h2>
									Lady’s <span>Amazing Collection<br>
									New</span> Fall Season <span>2015</span>
								</h2>
							   
							   	<p>
							   		The hottest winter 2015 for ladies
							   	</p>
							   
						   		<div class="group">
						   			<a href="#" class="btn btn-8">Shop Now</a>
						   		</div>
				   			</div>

						   	<div class="img">
					   			<img src="{{URL::asset('images/slide/img-3.png')}}" alt="">
				   			</div>

				   		</div>	
			   		</div>	
			   		<!-- SLIDE ITEM -->	

			   		<!-- SLIDE ITEM -->
					<div class="slide-item ">
						<div class="item-inner">
							<div class="text text-r">
							   	<h2>
									<span>The Best</span> Couple<br>
									Spring <span>2015</span>
								</h2>
							   
							   	<p>
							   		The Latest Couple style for spring 2015 
							   	</p>
							   
						   		<div class="group">
						   			<a href="#" class="btn btn-8">Shop Now</a>
						   		</div>
				   			</div>

						   	<div class="img img-l">
					   			<img src="{{URL::asset('images/slide/img-4.png')}}" alt="">
				   			</div>

				   		</div>	
			   		</div>	
			   		<!-- SLIDE ITEM -->		

				</div>
			</div>
		</section>
		<!-- END SLIDER -->

	<div class="row">

					<div class="col-md-3">
                    
                    </div>
                    
                    <div class="col-md-9">
                    
		
		<!-- NEW ARRIVALS -->	
		<section class="new-arrivals _2">
			<div class="container">	

				<div class="heading _2">

					<h2 class="text-uppercase">New Arrivals</h2>

				</div>

				<div class="new-arrivals-cn _2">
					<div class="row">
                    
						<div class="col-xs-3 col-sm-3 col-md-3">
							<!-- GRID ITEM -->
							<div class="grid-item _2 ">

								<div class="image">

									<a href="product-detail-2.html">
										<img src="{{URL::asset('images/product/watch/img-20.jpg')}}" alt="">
									</a>

									<div class="action">

										<div class="add-cart">
											<a href="#" class="btn btn-14 add-cart text-uppercase"><i class="fa fa-cart-plus"></i> add to cart</a>
										</div>

										<div class="group">
											<a href="#" class="btn btn-14"><i class="fa fa-heart-o"></i></a>

											<a href="#" class="btn btn-14"><i class="fa fa-refresh"></i></a>

											<a href="product-detail-2.html" class="btn btn-14"><i class="fa fa-eye"></i></a>
										</div>

									</div>
								</div>

								<div class="text">

									<h2 class="name">
										<a href="product-detail-2.html">Volcom Stix Skinny Jeans</a>	
									</h2>	

									<div class="price-box"> 

	                                  	<p class="special-price">
	                                   		<span class="price">£236.99</span> 
	                                  	</p> 

		                          	</div>
									
									<div class="rating">

										<span class="star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</span>

										3 Review(s)

									</div>

								</div>

							</div>
							<!-- END GRID ITEM -->
						</div>

						<div class="col-xs-3 col-sm-3 col-md-3">
							<!-- GRID ITEM -->
							<div class="grid-item _2 ">

								<div class="image">

									<a href="product-detail-2.html">
										<img src="{{URL::asset('images/product/watch/img-21.jpg')}}" alt="">
									</a>

									<div class="action">

										<div class="add-cart">
											<a href="#" class="btn btn-14 add-cart text-uppercase"><i class="fa fa-cart-plus"></i> add to cart</a>
										</div>

										<div class="group">
											<a href="#" class="btn btn-14"><i class="fa fa-heart-o"></i></a>

											<a href="#" class="btn btn-14"><i class="fa fa-refresh"></i></a>

											<a href="product-detail-2.html" class="btn btn-14"><i class="fa fa-eye"></i></a>
										</div>

									</div>
								</div>

								<div class="text">

									<h2 class="name">
										<a href="product-detail-2.html">Lord Benedict Handy</a>	
									</h2>	

									<div class="price-box"> 

	                                  	<p class="special-price">
	                                   		<span class="price">£236.99</span> 
	                                  	</p> 

		                          	</div>
									
									<div class="rating">

										<span class="star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</span>

										3 Review(s)

									</div>

								</div>

							</div>
							<!-- END GRID ITEM -->
						</div>

						<div class="col-xs-3 col-sm-3 col-md-3">
							<!-- GRID ITEM -->
							<div class="grid-item _2 ">

								<div class="image">

									<a href="product-detail-2.html">
										<img src="{{URL::asset('images/product/watch/img-13.jpg')}}" alt="">
									</a>

									<div class="action">

										<div class="add-cart">
											<a href="#" class="btn btn-14 add-cart text-uppercase"><i class="fa fa-cart-plus"></i> add to cart</a>
										</div>

										<div class="group">
											<a href="#" class="btn btn-14"><i class="fa fa-heart-o"></i></a>

											<a href="#" class="btn btn-14"><i class="fa fa-refresh"></i></a>

											<a href="product-detail-2.html" class="btn btn-14"><i class="fa fa-eye"></i></a>
										</div>

									</div>
								</div>

								<div class="text">

									<h2 class="name">
										<a href="product-detail-2.html">The North Face Adena Shirt</a>	
									</h2>	

									<div class="price-box"> 

	                                  	<p class="special-price">
	                                   		<span class="price">£236.99</span> 
	                                  	</p> 

		                          	</div>
									
									<div class="rating">

										<span class="star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half"></i>
										</span>

										3 Review(s)

									</div>

								</div>

							</div>
							<!-- END GRID ITEM -->
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- END NEW ARRIVALS -->	

		<!-- SHIPPING -->
		<section class="shipping shipping-grid">
			<div class="container">
				<div class="row">
					
					<!-- ITEM -->
					<div class="col-sm-3">
						<div class="shipping-item">
							<div class="inner">
								<span class="icon"><i class="fa fa-thumbs-o-up"></i></span>
								<h2>Free Shipping</h2>
								<p>Special Gift for customers can purchase over $ 500 bills</p>
							</div>
						</div>
					</div>
					<!-- END ITEM -->
					
					<!-- ITEM -->
					<div class="col-sm-3">
						<div class="shipping-item">
							<div class="inner">
								<span class="icon"><i class="fa fa-gift"></i></span>
								<h2>Special Gift</h2>
								<p>Special Gift for customers can purchase over $ 500 bills</p>
							</div>
						</div>
					</div>
					<!-- END ITEM -->
					
					<!-- ITEM -->
					<div class="col-sm-3">
						<div class="shipping-item">
							<div class="inner">
								<span class="icon"><i class="fa fa-dollar"></i></span>
								<h2>Refun money</h2>
								<p>Special Gift for customers can purchase over $ 500 bills</p>
							</div>
						</div>
					</div>
					<!-- END ITEM -->

				</div>
			</div>
		</section>
		<!-- END SHIPPING -->

		<!-- PARTNER -->
		<section class="partner partner-list">
			<div class="container">
				
				<div class="heading _2">
					<h2 class="text-uppercase">Our Partner</h2>
				</div>

				<div class="partner-cn _2">
					<div id="partner" data-custom="0-2,480-3,768-4,992-5,1200-6">
						<a href="#">
							<img src="{{URL::asset('images/partner/img-6.jpg')}}" alt="">
						</a>
						<a href="#">
							<img src="{{URL::asset('images/partner/img-7.jpg')}}" alt="">
						</a>
						<a href="#">
							<img src="{{URL::asset('images/partner/img-8.jpg')}}" alt="">
						</a>
						<a href="#">
							<img src="{{URL::asset('images/partner/img-9.jpg')}}" alt="">
						</a>
						<a href="#">
							<img src="{{URL::asset('images/partner/img-10.jpg')}}" alt="">
						</a>
						<a href="#">
							<img src="{{URL::asset('images/partner/img-7.jpg')}}" alt="">
						</a>
						<a href="#">
							<img src="{{URL::asset('images/partner/img-8.jpg')}}" alt="">
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- END PARTNER -->
        
        </div>
        </div>

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