@extends('layouts.main')


@section('title')
Yarth: Drawings & Illustration/Abstract/Collage
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
                                               $removeLink = "homecart-remove/" .$artId;
												
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
                                <a href="{{URL::to('view-cart')}}" class="btn btn-4 text-uppercase">CheckOut</a>
                                
                                @else
                                
                                 <a  class="btn btn-4 text-uppercase">CheckOut</a>
                                @endif
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
                                            <a href="{{URL::to('artist.profile')}}">Profile</a>
                                 			
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
		
       
        <!-- CATEGORY -->
    	<section class="product-list">
    		<div class="container">
        		<div class="row">
                	
                    <!-- SIDEBAR -->
                    <div class="col-md-3">
                    	
                        <!-- SIDEBAR CATEGORIES -->
                    	<aside class="sidebar sidebar-cat _1" id="marginbottom20">
							<ul class="nav-cat ">
                            <li>
                            	<a href="{{URL::to('index')}}">< Home</a>
                            	
                            </li>
								
                            @foreach($menutype1 as $menutype)
                            <li>			
                                    <a  href="{{URL::to('buy/artworks')}}">< {{$menutype->cattype_name}}</a> 
                            </li>
                            @endforeach
                                        
                            @foreach($menucate5 as $menucate)
                            <li>
                                <a  href="{{URL::to('buy/artworks/drawings-illustration')}}">< {{$menucate->cat_name}}</a>
                            @endforeach
                                
                                    @foreach($menusubcate34 as $menusubcate)
                                    <li>
                                        <a  href="{{URL::to('buy/artworks/drawings-illustration/abstract')}}">< {{$menusubcate->subcat_name}}</a>
                                        
                                        	<ul class="nav-cat">
                                            
                                            	@foreach($menusubsubcate85 as $menusubsubcate)
                            					<li>
                                					<a class="current-menu"  href="{{URL::to('buy/artworks/drawings-illustration/abstract/collage')}}">{{$menusubsubcate->subsubcat_name}}</a>
                            					@endforeach
                                            
                                            
                                            </ul>
                                    </li>

                                    @endforeach
                            
                                                 
                                                                                    
                                        
                                            
                                        
                                
							</ul>
						</aside>
                        <!-- END SIDEBAR CATEGORIES -->
                       {{ Form::open(array('url'=>'', 'class'=>'')) }}
                        <!-- SIDEBAR PRICE -->
                        <fieldset>
						<aside class="sidebar sidebar-cat _1" id="margintop10">
                        
							<ul class="nav-cat ">
                            	<li>
								<h5>Price(N)</h5>
								</li>
                                <li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="price-1">
										<label for="price-1">Any</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="price-2">
										<label for="price-2">0 - 50,000</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="price-3">
										<label for="price-3">50,001 - 100,000</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="price-4">
										<label for="price-4">100,001 - 200,000 </label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="price-5">
										<label for="price-5">200,001 - 500,000</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="price-6">
										<label for="price-6">500,000+</label>
									</div>
								</li>
							</ul>
						</aside>
                        </fieldset>
                       
						<!-- END SIDEBAR PRICE -->
                        
                        
                        <!-- SIDEBAR SIZE -->
                        <fieldset>
						<aside class="sidebar sidebar-cat _1" id="margintop10">
                        
							<ul class="nav-cat ">
                            	<li>
								<h5>Size</h5>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="size-1">
										<label for="size-1">Any</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="size-2">
										<label for="size-2">Small (up to 15)</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="size-3">
										<label for="size-3">Medium (up to 30)</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="size-4">
										<label for="size-4">Large (more than 30)</label>
									</div>
								</li>
							</ul>
						</aside>
                        </fieldset>
						<!-- END SIDEBAR SIZE -->
                        
                        <!-- SIDEBAR ORIGINAL/PRINT -->
                        <fieldset>
						<aside class="sidebar sidebar-cat _1" id="margintop10">
                        
							<ul class="nav-cat ">
                            	<li>
								<h5>Original/Print</h5>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="original-1">
										<label for="original-1">Any</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="original-2">
										<label for="original-2">Original</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="original-3">
										<label for="original-3">Print</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="original-4">
										<label for="original-4">Unknown</label>
									</div>
								</li>
							</ul>
						</aside>
                        </fieldset>
						<!-- END SIDEBAR ORIGINAL/PRINT -->
                        
                        <!-- SIDEBAR SIGNED -->
                        <fieldset>
						<aside class="sidebar sidebar-cat _1" id="margintop10">
                        
							<ul class="nav-cat ">
                            	<li>
								<h5>Signed</h5>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="sign-1">
										<label for="sign-1">Any</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="sign-2">
										<label for="sign-2">Signed</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="sign-3">
										<label for="sign-3">Unsigned</label>
									</div>
								</li>
							</ul>
						</aside>
                        </fieldset>
						<!-- END SIDEBAR SIGNED -->
                        
                        <!-- SIDEBAR FRAMING -->
                        <fieldset>
						<aside class="sidebar sidebar-cat _1" id="margintop10">
                        
							<ul class="nav-cat ">
                            	<li>
								<h5>Framing</h5>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="frame-1">
										<label for="frame-1">Any</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="frame-2">
										<label for="frame-2">Framed</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="frame-3">
										<label for="frame-3">Unframed</label>
									</div>
								</li>
							</ul>
						</aside>
                        </fieldset>
						<!-- END SIDEBAR FRAMING -->
                        
                        <!-- SIDEBAR STRECHED CANVAS -->
                        <fieldset id="marginbottom20">
						<aside class="sidebar sidebar-cat _1" id="margintop10">
                        
							<ul class="nav-cat ">
                            	<li>
								<h5>Strected Canvas</h5>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="strcan-1">
										<label for="strcan-1">Any</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="strcan-2">
										<label for="strcan-2">Streched</label>
									</div>
								</li>
								<li>
									<div class="check-box">
										<input type="checkbox" class="checkbox" id="strcan-3">
										<label for="strcan-3">Not Applicable</label>
									</div>
								</li>
							</ul>
						</aside>
                        </fieldset>
                        
                        <fieldset>
                        <span>{{ Form::submit('Apply', array('class'=>'btn btn-4 btn-submit text-capitalize')) }}</span>
                        <span>{{ Form::reset('Reset', array('class'=>'btn btn-4 btn-reset text-capitalize')) }}</span>
                        
                        </fieldset>
						<!-- END SIDEBAR SIGNED -->
                       
                       
                       {{ Form::close() }}
                    
                    </div>
                    <!-- END SIDEBAR -->
                    
                    <!-- CATEGORY LIST -->
                    <div class="col-md-9 ">
                    		
                            <div class="row">
                            
                            @if(isset($arts))
                  		    @foreach($arts as $art)
										<?php
                                 $img_name=$art->image;
								 $artid = $art->aid;
								 $auid = $art->user_id;
								 $username= $art->user_name;
								 $subsubsubcat_id = $art->subsubsubcat_id;
								
								$newlink="selected-art/".$subsubsubcat_id."/".$artid;
								$aboutUser="about/".$username;
								 ?>
                            
                                 
       							<div class="col-md-6 col-sm-6" id="margintop30" >
                                		<a class="shop-item-list" href={{URL::to($newlink)}}>
                                   
                                                <figure>
                                                   	 <img class="img-responsive img" src='{{ URL::asset("yarthimages/artworks/$art->image") }}' alt="YARTH" />
                                                </figure>
									<div class="product-info" >
                                    
                                        
                                       <strong> <span class="">{{$art->name}}</span></strong>
                                        
                                        <span class="" style="display:none">{{$art->aid}}</span><!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                                          
                    <strong class="pull-right"> ₦ <span class="product_price pull-right">{{number_format($art->unit_price)}}</span></strong>
                    
                                        <!--<strong><span class="pull-right">Art by:&nbsp;{{$art->user_name}}</span></strong>-->
                                        
                                    
                                    </div>
                
                					<div class="row">
                                    	<div class="col-md-6">
                                        
                                        	<strong><span class="pull-left">Art by:&nbsp;{{$art->user_name}}</span></strong>
                
                       <!--{{ Form::open(array('url' => 'home_cart','class'=>'form-inline  nopadding clearfix pull-left')) }}

                            {{ Form::hidden('artwork_id', $art->aid ) }}
                            {{ Form::hidden('artwork_name', $art->name) }}
                            {{ Form::hidden('image_path', $art->image ) }}
                            {{ Form::hidden('artwork_price', $art->unit_price) }}
                            {{ Form::hidden('artwork_qty', '1') }}
                            {{ Form::hidden('artist_id', $art->user_id) }}
                            
                           {{ Form::submit('Add to Cart', array('class' => 'btn btn-9 pull-left')) }}
                            
                            {{ Form::close() }}-->
                            			</div>
                                        
                                        <div class="col-md-6">
                       {{ Form::open(array('url' => 'buy_now','class'=>'form-inline  nopadding clearfix pull-right')) }}

                            {{ Form::hidden('artwork_id', $art->aid ) }}
                            {{ Form::hidden('artwork_name', $art->name) }}
                            {{ Form::hidden('image_path', $art->image ) }}
                            {{ Form::hidden('artwork_price', $art->unit_price) }}
                            {{ Form::hidden('artwork_qty', '1') }}
                            {{ Form::hidden('artist_id', $art->user_id) }}
                            
                           {{ Form::submit('Buy  Now', array('class' => 'btn btn-9 pull-right')) }}
                            
                            {{ Form::close() }}
                            
                            <!--<a  class="btn btn-9 pull-right" href="">Buy Now</a>-->
                            
                            			</div>
                                        
                            		</div>
                                    </a>
                            						
                                </div>
                                                             
                                		@endforeach
                               			@endif
                                
                                <div style="text-align:center">{{$arts->links()}}</div>
                                
                                
                            </div>
                   </div>

                    <!-- END CATEGORY LIST -->
                    
            	</div>
        	</div>
    	</section>
		<!-- END CATEGORY -->
        
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