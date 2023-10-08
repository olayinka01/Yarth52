@extends('layouts.main')


@section('title')
Yarth: View Cart
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
            	<h3 class="pull-left">View <span>Cart</span></h3>
				<ul class="nav-breakcrumb pull-right ">
                	<li><a href="{{URL::to('index')}}"> Home </a></li>
					
				</ul>
			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- VIEW CART -->
		<section class="shop-cart">
			<div class="container">
            
            @if(Session::has('cartupdate_msg'))

			<center><p style="color:green">{{Session::pull('cartupdate_msg')}}</p></center>

			@endif

		{{ Form::open(array('url' => 'update_cart','class'=>'clearfix')) }}
                <!-- TABLE CART -->
				<div class="table-cn ">
					<table class="table table-cart">
						<thead>
							<tr>
								<th>Items</th>
								<th>Quantity</th>
								<th>Subtotal (N)</th>
								<th>GrandTotal (N)</th>
								<th>Remove</th>
                                <th>Update</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                            <?php
                                                if(!isset($cart_content)){
													$array=array();
													$cart_content=$array;
												}
												
												$i=0;
												
								?>
                                                                                                 
 								@foreach($cart_content as $content)                
 
 								<?php
												$artId = $content->rowid;
                                                $removeLink = "viewcart-remove/" .$artId;	
								?>    
                                <?php
												$artId = $content->rowid;
												$updateLink = "viewcart-update/" .$artId;	
								?>    
                                
                                                           
								<td class="td-item">
									<div class="img">
										<a href="#">
											<img src="{{URL::asset('yarthimages/artworks'.'/'.$content->options->artwork_image)}}" width="150" alt="VIEW CART">
										</a>
									</div>
									<div class="info">
										<a href="#">{{$content->name}}</a>
                                        {{ Form::hidden('id', $content->id) }}
									</div>
								</td>
           
                                
								<td class="td-qty text-center">
									<div class="qty">
										
                                        {{ Form::text('newartwork_qty',Input::old('newartwork_qty'), array('id'=>'qty', 'class'=>'input-text')) }}                               <!--<input type="text" class="input-text" value="1">-->
                                        
                                        {{ Form::text('artwork_qty',$content->qty, array('id'=>'qty', 'disabled'=>'disabled', 'class'=>'input-text')) }}                          
										
                                        <div class="clearfix"></div>
                                        
                                        <?php $i++;?>
									</div>
                                    {{Form::hidden('counter',$i)}}
								</td>
                                
								<td class="td-sub text-center">
								{{number_format($content->price *1)}}
								</td>
                               
                                
								@if($content->qty==1)
								<td class="td-sub text-center">
								{{number_format($content->price *$content->qty)}}
								</td>
                                @else
                                <td class="td-sub text-center">
								{{number_format($content->price *$content->qty)}}
								</td>
                                @endif
								<td class="td-remove text-center">
									<a href="{{URL::to($removeLink)}}"><img src="images/icon-delete.png" alt=""></a>
								</td>
                                <td class="td-update text-center">
									<a href="{{URL::to($updateLink)}}"><i class="fa fa-cart-plus"></i></a>
								</td>
							</tr>
                            
                            
                            <!--............................................................-->
													
													  	   @endforeach
							
						</tbody>
						<tfoot>
							<tr class="tr-f">
								<td class="td-item">
									<p>Total:</p>
								</td>
								<td></td>
								<td class="td-sub text-center">
									
								</td>
								<td class="td-sub text-center">
									{{$carttotal}}
								</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- END TABLE CART -->
				
				<!-- CART BUTTON -->
				<div class="shop-button clearfix">
                	{{ Form::submit('Update Cart ', array('class'=>'btn btn-13 pull-left')) }}
					<!--<a href="" class="btn btn-13 pull-left">Update Cart</a>-->
					 @if(Session::has('uid'))
                    <a href="{{URL::to('delivery-info-checkout')}}" class="btn btn-13 pull-right">Process to Checkout</a>
                    @else
                    <a href="{{URL::to('#')}}" class="btn btn-13 pull-right">Login for Process to Checkout</a>
                    @endif
				</div>
				<!-- END CART BUTTON -->
                
                {{ Form::close() }}
                
                
                </div>
		</section>
		<!-- END VIEW CART -->
                
        
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