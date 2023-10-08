@extends('layouts.main')


@section('title')
Yarth: Customer Checkout
@yield('title')
@stop


	



@section('header')
	
   
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
            	<h3 class="pull-left">Order Completed</h3>
				<ul class="nav-breakcrumb pull-right ">
                	<li><a href="{{URL::to('index')}}"> Home </a></li>
					
				</ul>
			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- CONTENT -->
		<section id="printableArea">
			<div class="container">
            	<div class="printable">
                	
                    	<!-- CALLOUT -->
					<div class="alert alert-default fade in">
            	<?php 
							     /* $id = Session::get('id');
							      $firstname = Session::get('firstname');
							      $lastname = Session::get('lastname');
								  $gender = Session::get('gender');
								  $email = Session::get('email');
								  $phone = Session::get('phone');
								  $country = Session::get('country');
								  $state = Session::get('state');
								  $city = Session::get('city');
								  $address = Session::get('address');
								  */
							
							  ?>
                              
            
            	<div class="row" >
                    <div class="col-md-9 col-sm-9"><!-- LEFT TEXT -->
                    
                    			<h1 class="styleGreen text-center"> Thank you for using Yarth...</h1>
                                <h2> Your Order has been placed...</h2>
                                <h4><strong>Order Details</strong></h4>
                                
                                <div class="cartContent">
	
						 <div class="item" style="background:white; padding:20px 5px; border-radius:5px;">
							
							<div class="product_name"><b class="fsize13">ORDER ID : </b>{{$order_details->order_id}}</div>
                            <div class="product_name"><b class="fsize13">NAME : </b>{{$order_details->cust_lastname}}&nbsp;{{$order_details->cust_firstname}}</div>
                            <div class="product_name"><b class="fsize13">EMAIL : </b>{{ $order_details->cust_email}}</div>
                            <div class="product_name"><b class="fsize13">ADDRESS : </b>{{ $order_details->cust_address}}</div>
							
							<div class="clearfix"></div>
						</div>
                                     
					

						<div class="clearfix"></div>
					</div>
                                    
                       
    
                    </div><!-- END LEFT TEXT -->
                    
                    		<div class="col-md-3 col-sm-3 text-right" style="margin-top:20%"><!-- right btn -->
								<!--<a href="#" class="btn btn-primary btn-lg" onclick="window.print();">PRINT</a>-->
                                <a href="#" class="btn btn-10 btn-lg" onclick="printDiv('printableArea')">PRINT</a>
							</div><!-- /right btn -->
                    
                    
                    </div>
                 </div>
                    <!-- END CALLOUT -->
					
                    <div class="divider half-margins"><!-- divider 30px --></div>

					<!-- BILLING and SHIPPING ADDRESS -->
				
					<!-- /BILLING and SHIPPING ADDRESS -->


					<!-- SUMMARY TABLE -->
					<div class="cartContent margin-top30">
						<!-- cart header -->
						<div class="item head">
							<span class="cart_img"></span>
							<span class="product_name fsize13 bold">PRODUCT NAME</span>
                            <span class="qty fsize13 bold">QUANTITY</span>
							<span class="total_price fsize13 bold">TOTAL</span>
							
							<div class="clearfix"></div>
						</div>
						<!-- /cart header -->

                
							 @foreach($cart_contents as $content)   

						<!-- cart item1 -->
						<div class="item">
							<div class="cart_img"><img src="{{URL::asset('yarthimages/artworks'.'/'.$content->options->artwork_image)}}" alt="" width="70" /></div>
							<a href="#" class="product_name">{{$content->name}}</a>
                            <div class="qty"> {{$content->qty}} </div>
							<div class="total_price">₦<span>{{$content->price * $content->qty}}.00</span></div>
                                         
							<div class="clearfix"></div>
						</div>
						<!-- /cart item1 -->
                        
                        <!-- cart item2 -->
						<div class="item">
                            
                            <div class="cart_img"><img src="" alt="" width="70" /></div>
                            <div class="product_name">Delivery</div>
                            <div class="qty"> </div>
                            <div class="total_price">₦<span>{{$order_details->delivery_price * $content->qty}}.00</span></div>
                                                       
							<div class="clearfix"></div>
						</div>
						<!-- /cart item2 -->
                        
                        
                        

				@endforeach	
							
							<?php
							$shippingprice = $order_details->delivery_price;
							$shippingtotal = $shippingprice * $totalqty;
							$grandtotal = $carttotal + $shippingtotal;
							
							
							?>

						<!-- cart total -->
						<div class="total pull-right">
							<p>
								TOTAL SHIPPING:₦ {{$shippingtotal}}.00
							</p>
							<p>
							<span class="cart_total">
								SUBTOTAL: ₦ {{$carttotal}}.00
							</span>
                            </p>
                            <p>
                            <span class="cart_total">
								GRAND TOTAL: ₦ {{$carttotal + $shippingtotal}}.00
							</span>
                            </p>

						</div>
						<!-- /cart total -->

						<div class="clearfix"></div>
					</div>
					<!-- /SUMMARY TABLE -->


				</div>

                  
                </div>  
			</div>
		</section>
		<!-- END CONTENT -->


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
    
    <!-- Library JS -->
	<script src="{{ URL::asset('js/library/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	
    
  <script type="text/javascript">
  
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
            


</script> 

{{Cart::destroy()}}
{{Session::forget('order_id')}}

    @stop