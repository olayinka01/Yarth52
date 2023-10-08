@extends('layouts.main')


@section('title')
Yarth: Selected Artwork
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
    
    				
				
                            
                            
							
                   
					<!-- END TOP MENU -->
                

		<!-- HEADER -->
		<header class="header _2">
        
			
            <div class="container">

				<!-- HEADER CONTENT -->
				<div class="header-cn clearfix">

					 <!-- MINI CART -->
								<div class="mini-cart ">

						<!-- HEADER CART -->
									<div class="cart-head" id="cart-head">
										<label style="color:#CCCCCC;">MY CART <span>()</span></label>
										<p><span style="color:#CCCCCC;">Total:</span>({{$carttotal}})  <small>({{Cart::count()}})</small></p>
										<span class="cart-count">{{Cart::count()}}</span>
                                    
									</div>
						<!-- END HEADER CART -->

						<!-- CART CONTENT -->
								<div class="cart-cn">
                                
                                <?php
                                                if(!isset($cart_content)){
													$array=array();
													$cart_content=$array;
												}
												
								?>
                                                 
 								@foreach($cart_content as $content)                
 
 												<?php
												$artId = $content->rowid;
												$arId ="";
												
												$subsubsubcat_id = "";
												
												if(isset($art_details) && sizeof($art_details) == 1 ){
													
													$arId = $art_details->aid;
												
												    $subsubsubcat_id = $art_details->subsubsubcat_id;
												
												}
												
												if($subsubsubcat_id == ""){
												 $removeLink = "viewcart-remove/" .$artId;
												}else{
                                                $removeLink = "cart-remove/" .$subsubsubcat_id ."/" .$arId ."/" .$artId;
											   
												}
												
												?>   
									<ul class="cart-list">
								<li>
									<a href="#" class="img">
										<img src="{{URL::asset('yarthimages/artworks'.'/'.$content->options->artwork_image)}}" width="70" alt="QUICKCART">
									</a>
									<div class="text">
										<div class="name">
											<a href="#">{{$content->name}}</a>
										</div>
                                        @if($content->qty==1)
										<span class="price">{{$content->qty}} item at ₦ {{number_format($content->price *$content->qty)}}</span> @else
                                        <span class="price">{{$content->qty}} item at ₦ {{number_format($content->price *$content->qty)}}</span> @endif
										<a href="{{URL::to($removeLink)}}" class="delete"><img src="{{URL::asset('images/icon-delete.png')}}" alt=""></a>
									</div>
								</li>
								
							</ul>
                            <!--............................................................-->
													
													  	   @endforeach
                                                           
                                                           
							<p class="cart-total">Total: <span>{{$carttotal}}</span></p>
							<div class="cart-bt">
								<a href="{{URL::to('empty')}}" class="btn btn-4 text-uppercase">Empty Cart</a>
								
                                @if (!Cart::content()->isEmpty())
                                <a href="{{URL::to('view-cart')}}" class="btn btn-4 text-uppercase">View Cart</a>
                                
                                @else
                                
                                 <a  class="btn btn-4 text-uppercase">View Cart</a>
                                @endif
							</div>
						</div>
						<!-- END CART CONTENT -->

					</div>
					<!-- END MINI CART -->

					
					<!-- LOGO -->
					<div class="logo">
						<a href="{{URL::to('index')}}"><img src="{{URL::asset('images/logo-mine.png')}}" alt=""></a>
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

							<li class="">

								<a href="{{URL::to('customer-login-register')}}">Buy Artwork & Tools</a>

							</li>

							<li><a href="{{URL::to('artist-login-register')}}">Sell Artwork</a></li>

							<li><a href="{{URL::to('toolsvendor-login-register')}}">Sell Artistic tools</a></li>
                            
                            
                            @if(Session::has('artist_name'))
							<li class="menu-parent">

								<a href="#">{{ Session::get('firstname') }} {{ Session::get('lastname') }}</a>

								<ul class="sub-menu">

                                    <li >
                                            <a href="{{URL::to('artist/profile')}}">Profile</a>
                                 			
                                    </li>
                                    <li>
                                            <a href="#">Steps To Sell Your Art</a>
                                 			
                                    </li>
                                    <li>
                                            <a href="#">Art Education</a>
                                 			
                                    </li>
                                    <li>
                                            <a href="#">Artist FAQ</a>
                                 			
                                    </li>
                                    
                                    <li>
                                            <a href="{{URL::to('logout')}}">Logout</a>
                                 			
                                    </li>
                                    
                                    
                                    </ul>
                                    
                               @elseif(Session::has('customer_name'))
                                <li class="menu-parent">

								<a href="#">{{ Session::get('lastname') }} {{ Session::get('firstname') }}</a>

								<ul class="sub-menu">
                                    <li>
                                            <a href="{{URL::to('logout')}}">Logout</a>
                                 			
                                    </li>
                                    
                                    
                                    </ul>
                                     @elseif(Session::has('vend_name'))
                                    <li class="menu-parent">

								<a href="#">{{ Session::get('lastname') }} {{ Session::get('firstname') }}</a>

								<ul class="sub-menu">

									<li>
                                            <a href="#">Profile</a>

                                    </li>
                                    
                                    <li>
                                            <a href="#">Steps To Sell Your tools</a>
                                 			
                                    </li>
                                    <li>
                                            <a href="#">Art FAQ</a>
                                 			
                                    </li>
                                    
                                    <li>
                                            <a href="{{URL::to('logout')}}">Logout</a>
                                 			
                                    </li>
                                    
                                    
                                    </ul>
                                    
								@else
						<li class="menu-parent">

								<a href="#">Login</a>

								<ul class="sub-menu">

									<li>
                                            <a href="{{URL::to('artist-login-register')}}">Artist</a>
                                 			
                                    </li>
                                    <li >
                                            <a href="{{URL::to('toolsvendor-login-register')}}">Tools Seller</a>
                                 			
                                    </li>
                                    <li>
                                            <a href="{{URL::to('customer-login-register')}}">Customer</a>
                                 			
                                    </li>
                                    
                               </ul>
                        @endif	
							
                            
                            <li><a href="#">News</a></li>

							
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

		<!-- BREAKCRUMB -->
		<section class="breakcrumb bg-grey">
			<div class="container">
				<ul class="nav-breakcrumb ">
					<li><a href="{{URL::to('index')}}"> < Home </a></li>
					
				</ul>
			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
       
       	<!-- PRODUCT DETAIL -->
		<section class="product-detail _2 ">
			<div class="container">
            
            @if(Session::has('cart_msg'))

			<center><p style="color:green">{{Session::pull('cart_msg')}}</p></center>

			@endif

				
				<div class="row">

					<div class="col-l text-center">

						<div class="product-image">

							<div class="image-block">

								<a id="view_full_size" class="fancybox" href='{{ URL::asset("yarthimages/artworks/$art_details->image") }}'>
									<img src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}' alt="YARTH"/>
									<span class="view-link"></span>
								</a>

							</div>

							<div class="view-block">

								<ul class="thumb_list">

									<li class="active" data-src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}'><img src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}' alt=""/></li>

									<li data-src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}'><img src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}' alt=""/></li>

									<li data-src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}'><img src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}' alt=""/></li>

									<li data-src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}'><img src='{{ URL::asset("yarthimages/artworks/$art_details->image") }}' alt=""/></li>

								</ul>

							</div>

							
						</div>

					</div>

					
					<div class="col-r">

						<div class="product-text">

							<h1 class="name">{{ $art_details->name }}</h1>
						
						
							

						<div class="hr _1"></div>

						<div class="price-box"> 

	                         <p class="special-price">
	                           	<span class="price">N{{ number_format($art_details->unit_price) }}</span> 
	                         </p> 
	                          	
	                    </div>

	                      	<div class="short-description">
	                      		<p>
	                      			{{ $art_details->description }} 
	                      		</p>
	                      	</div>

	                      	<div class="hr _1"></div>

	                      	
              {{ Form::open(array('url' => 'cart','class'=>'form-inline margin-top30 nopadding clearfix add-to-box')) }}

	                      	
                            
                    {{ Form::hidden('artwork_id',$art_details->aid ) }}
                    
                    {{ Form::hidden('artwork_name',$art_details->name ) }}
                    
                    {{ Form::hidden('image_path',$art_details->image ) }}
                    
                    {{ Form::hidden('artwork_price',$art_details->unit_price ) }}
                    
                    {{ Form::hidden('subsubsubcat_id',$art_details->subsubsubcat_id ) }}
                    
                    {{ Form::hidden('artist_id',$art_details->user_id ) }}

	                      		<div class="input-content">

					                <label for="qty">QTY:</label>

									<div class="qty-box">
										
						        		<button class="qty-decrease" id="qty-plus"></button>
                                        
                    {{ Form::text('artwork_qty',Input::old('artwork_qty'), array('id'=>'qty', 'maxlength'=>'12', 'value'=>'1', 'title'=>'Qty', 'class'=>'input-text qty')) }}

						        		<!--<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" />-->

						        		<button class="qty-increase" id="qty-minus"></button>

					        		</div>

				                </div>

				                <div class="add-to-cart">
                                
                                {{ Form::submit('Add To Cart ', array('class'=>'btn btn-10 text-uppercase')) }}
                                
				                	<!--<a href="{{URL::to('cart')}}" class="btn btn-10 text-uppercase"><i class="fa fa-cart-plus"></i> <span>Add To Cart</span></a>-->
				                </div>

                            
                            {{ Form::close() }}
                            

                      	</div>

					</div>
				</div>

				<div class="product-collateral" id="tabs-responsive">
					<ul class="nav-tab">

					    <li class="active"><a href="#description" aria-controls="description" data-toggle="tab">Artwork Description</a></li>

					    <li><a href="#information" aria-controls="information" data-toggle="tab">Information</a></li>

					    <li><a href="#customer" aria-controls="customer" data-toggle="tab">Customer Reviews (12)</a></li>

					    <li><a href="#shipping" aria-controls="shipping" data-toggle="tab">Shipping &amp; Returns</a></li>

					    <li><a href="#tags" aria-controls="tags" data-toggle="tab">Product Tags</a></li>
					    <li><a href="#custum" aria-controls="custum" data-toggle="tab">Custum Tab</a></li>
				  	</ul>

				  	<div class="tab-content">

					    <div class="tab-pane" id="description">
							<div class="text-content">
								<p>
									{{ $art_details->description }}
								</p>
								
							</div>
					    </div>

					    <div class="tab-pane" id="information">
							<div class="text-content">
								<p>
									Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, at everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.
								</p>

								<br>

								<p>
									Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.
								</p>
								<br>
								<p>
									Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones nec an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per. Has eu idque similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.</p>
							</div>
					    </div>

					    <div class="tab-pane" id="customer">
							
							<div class="text-content">
								<p>
									Beautiful green skirt featuring crossed fabric overlays at front and back. Zip/hook closure at side, fully lined. By Finders Keepers.
								</p>
								<br>
								<p>* Polyester/Elastane; Lining: Polyester</p>
								<p>* 26"/66 waist </p>
								<p>* 17.5"/44.5cm length </p>
								<p>* Model is wearing size small </p>
								<p>* Measurements taken from size small </p>
								<p>* Dry clean only</p>
								<p>* Imported </p>
								<p>* Can’t live without: Love</p>
								<p>* Tell us a secret: I never go anywhere in public without mascara.</p>
							</div>

					    </div>

					    <div class="tab-pane" id="shipping">
						
							<div class="text-content">
								<p>
									Beautiful green skirt featuring crossed fabric overlays at front and back. Zip/hook closure at side, fully lined. By Finders Keepers.
								</p>
								<br>
								<p>* Polyester/Elastane; Lining: Polyester</p>
								<p>* 26"/66 waist </p>
								<p>* 17.5"/44.5cm length </p>
								<p>* Model is wearing size small </p>
								<p>* Measurements taken from size small </p>
								<p>* Dry clean only</p>
								<p>* Imported </p>
								<p>* Can’t live without: Love</p>
								<p>* Tell us a secret: I never go anywhere in public without mascara.</p>
							</div>

					    </div>

					    <div class="tab-pane" id="tags">
					    	
					    	<div class="text-content">
								<p>
									Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, at everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.
								</p>

								<br>

								<p>
									Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.
								</p>
								<br>
								<p>
									Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones nec an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per. Has eu idque similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.</p>
							</div>

					    </div>

					    <div class="tab-pane" id="custum">
					    	
					    	<div class="text-content">
								<p>
									Beautiful green skirt featuring crossed fabric overlays at front and back. Zip/hook closure at side, fully lined. By Finders Keepers.
								</p>
								<br>
								<p>* Polyester/Elastane; Lining: Polyester</p>
								<p>* 26"/66 waist </p>
								<p>* 17.5"/44.5cm length </p>
								<p>* Model is wearing size small </p>
								<p>* Measurements taken from size small </p>
								<p>* Dry clean only</p>
								<p>* Imported </p>
								<p>* Can’t live without: Love</p>
								<p>* Tell us a secret: I never go anywhere in public without mascara.</p>
							</div>

					    </div>

				  	</div>

				</div>

			</div>
		</section>
		<!-- END PRODUCT DETAIL -->

		<!-- PRODUCT RELATED -->
		<section class="product-related">
			<div class="container">

				<div class="heading _2">
					<h2 class="text-uppercase">Related Artworks</h2>
				</div>

				<div class="related-cn _2">
					<div class="row">

						<div id="related-slide" data-custom="0-1,400-2,800-3,1200-4">

							<!-- GRID ITEM -->
							@if(isset($relatedarts))
                  		    @foreach($relatedarts as $relatedart)
										<?php
                                 $img_name=$relatedart->image;
								 $artid = $relatedart->aid;
								 $auid = $relatedart->user_id;
								 $subsubsubcat_id = $relatedart->subsubsubcat_id;
								
								$newSelectedArt="selected-art/".$subsubsubcat_id."/".$artid;
								 ?>
                            
                                 
       							<div  >
                                		<a class="related-item-list" href="#">
                                   
                                                <figure>
                                                   	 <img class="img-responsive img" src='{{ URL::asset("yarthimages/artworks/$relatedart->image") }}' alt="YARTH" />
                                                </figure>
									<div class="product-info" >
                                    <span>{{$relatedart->name}}</span>
									
									<span style="display:none">{{$relatedart->aid}}</span>  

				<strong> ₦ <span>{{number_format($relatedart->unit_price)}}</span></strong></span>
                
                					<span style="display:none">{{$relatedart->user_id}}</span>
                                    </div>
                
                					<div class="row">
                                    	<div class="col-md-6">
                
                       {{ Form::open(array('url' => 'home_cart','class'=>'form-inline  nopadding clearfix')) }}

                            {{ Form::hidden('artwork_id', $relatedart->aid ) }}
                            {{ Form::hidden('artwork_name', $relatedart->name) }}
                            {{ Form::hidden('image_path', $relatedart->image ) }}
                            {{ Form::hidden('artwork_price', $relatedart->unit_price) }}
                            {{ Form::hidden('artwork_qty', '1') }}
                            {{ Form::hidden('artist_id', $relatedart->user_id) }}
                            
                           {{ Form::submit('Add to Cart', array('class' => 'item-add btn btn-9')) }}
                            
                            {{ Form::close() }}
                            			</div>
                                        
                                        <div class="col-md-6">
                            
                            <button id="flow-right" class ="btn btn-9">Buy Now</button>
                            
                            			</div>
                                        
                            		</div>
                                    </a>
                            						
                                </div>
                                                             
                                		@endforeach
                               			@endif
                                
							<!-- END GRID ITEM -->

							

						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- END PRODUCT RELATED -->
        
        

		<!-- SHIPPING -->
		<section class="shipping shipping-grid">
			<div class="container">
				<div class="row">
					
					<!-- ITEM -->
					<div class="col-sm-4">
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
					<div class="col-sm-4">
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
					<div class="col-sm-4">
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
			<div class="footer-b ">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6 col-md-push-6 payment-icon">
							<a href="#"><img src="{{URL::asset('images/logo-mine.png')}}" alt=""></a>
						</div>
                        

						<div class="col-md-6 col-md-pull-6 copyright ">
                            <p>
								&copy; 2018 <a href="http://yarth.com/" title="MegaDrupal">Yarth</a> - All Rights Reserved.
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