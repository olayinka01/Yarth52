@extends('layouts.main')


@section('title')
Yarth: Delivery Information
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
            	<h3 class="pull-left">Delivery <span>Information</span></h3>
				<ul class="nav-breakcrumb pull-right ">
                	<li><a href="{{URL::to('index')}}"> Home </a></li>
					
				</ul>
			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- DELIVERY INFORMATION CHECK OUT -->
		<section class="check-out">
			<div class="container">
            	<?php 
							      $cust_id = Session::get('id');
							      $firstname = Session::get('firstname');
							      $lastname = Session::get('lastname');
								  $gender = Session::get('gender');
								  $phone = Session::get('phone');
								  $country = Session::get('country');
								  $state = Session::get('state');
								  $city = Session::get('city');
								  $address = Session::get('address');
							
							  ?>
                              
            
            	<div class="" >
                    <div class="col-md-8 col-sm-8">
                                    
                        <!-- DELIVERY INFO CHECK OUT FORM -->
                        
                     {{ Form::open(array('url' => 'delivery-info-checkout','class'=>'form check-out-form')) }}
                            <div class="row">
                            <h4 style="text-align:center;">Your Delivery Information</h4>
                    		
                                <div class="col-xs-6">
                                    <label>First Name <sup>*</sup></label>
                                    
                             	@if($firstname){{ Form::text('firstname', $firstname, array('placeholder' => 'First Name', 'required'=>'required', 'class'=>'input-text')) }}
                                @else
    							{{ Form::text('firstname', Input::old('firstname'), array('placeholder' => 'First Name', 'required'=>'required', 'class'=>'input-text')) }}
    							@endif
                                    <!--<input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-6">
                                    <label>Last Name <sup>*</sup></label>
                                @if($lastname){{ Form::text('lastname', $lastname, array('placeholder' => 'Last Name', 'required'=>'required', 'class'=>'input-text')) }}              
    							@else
    							{{ Form::text('lastname', Input::old('lastname'), array('placeholder' => 'Last Name', 'required'=>'required', 'class'=>'input-text')) }}
    							@endif
                                   <!-- <input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-6">
                                    <label>Gender <sup>*</sup></label>
                                @if($gender){{ Form::select('gender', array(''=>'Gender','Female'=>'Female','Male'=>'Male'), Input::old('gender'), array('required'=>'required', 'class' => 'input-text', 'selected'=>$gender)) }}
                                @else
                                {{ Form::select('gender', array(''=>'Gender','Female'=>'Female','Male'=>'Male'), Input::old('gender'), array('required'=>'required', 'class' => 'input-text')) }}
                                @endif
                                    <!--<input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-6">
                                    <label>Phone Number <sup>*</sup></label>
                                {{ Form::text('phone', Input::old('phone'), array('placeholder' => 'Phone Number', 'required'=>'required', 'class'=>'input-text')) }}
                                    <!--<input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-6">
                                    <label>Country <sup>*</sup></label>
                                @if($country){{ Form::select('country', array(''=>'Select Country','Nigeria'=>'Nigeria'), Input::old('country'), array('required'=>'required', 'class' => 'input-text', 'selected'=>$country)) }}
                                @else
                                {{ Form::select('country', array(''=>'Select Country','Nigeria'=>'Nigeria'), Input::old('country'), array('required'=>'required', 'class' => 'input-text')) }}
                                @endif
                                    <!--<input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-6">
                                	<label>State <sup>*</sup></label>
                                {{ Form::select('state', array(''=>'Select State',
                          'Abuja'=>'Abuja',
                          'Benue'=>'Benue',
                          'Kogi'=>'Kogi',
                          'Kwara'=>'Kwara',
                          'Nasarawa'=>'Nasarawa',
                          'Niger'=>'Niger',
                          'Plateau'=>'Plateau',
                          'Adamawa'=>'Adamawa',
                          'Bauchi'=>'Bauchi',
                          'Borno'=>'Borno',
                          'Gombe'=>'Gombe',
                          'Taraba'=>'Taraba',
                          'Yobe'=>'Yobe',
                          'Jigawa'=>'Jigawa',
                          'Kaduna'=>'Kaduna',
                          'Kano'=>'Kano',
                          'Katsina'=>'Katsina',
                          'Kebbi'=>'Kebbi',
                          'Sokoto'=>'Sokoto',
                          'Zamfara'=>'Zamfara',
                          'Abia'=>'Abia',
                          'Anambra'=>'Anambra',
                          'Ebonyi'=>'Ebonyi',
                          'Enugu'=>'Enugu',
                          'Imo'=>'Imo',
                          'Akwa Ibom'=>'Akwa Ibom',
                          'Bayelsa'=>'Bayelsa',
                          'Cross River'=>'Cross River',
                          'Delta'=>'Delta',
                          'Edo'=>'Edo',
                          'Rivers'=>'Rivers',
                          'Ekiti'=>'Ekiti',
                          'Lagos'=>'Lagos',
                          'Ogun'=>'Ogun',
                          'Ondo'=>'Ondo',
                          'Osun'=>'Osun',
                          'Oyo'=>'Oyo'), Input::old('state'), array('required'=>'required', 'class' => 'input-text')) }}
                          </div>
                                <div class="col-xs-12">
                                    <label>Town/City <sup>*</sup></label>
                                @if($city){{ Form::text('city', $city, array('placeholder' => 'Town/City', 'required'=>'required', 'class'=>'input-text')) }}             
    							@else
    							{{ Form::text('city', Input::old('city'), array('placeholder' => 'Town/City', 'required'=>'required', 'class'=>'input-text')) }}
    							@endif
                                    <!--<input type="text" class="input-text">-->
                                </div>	
                               <div class="col-xs-12">
                                    <label>Address <sup>*</sup></label>
                                @if($address){{ Form::text('address', $address, array('placeholder' => 'Address', 'required'=>'required', 'class'=>'input-text')) }}            
    							@else
    							{{ Form::text('address', Input::old('address'), array('placeholder' => 'Address', 'required'=>'required', 'class'=>'input-text')) }}
    							@endif
                                    <!--<input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-12">
                                    <label>Additional Info</label>
                                {{ Form::textarea('add_info', '', array('maxlength'=>'350', 'placeholder' => 'Additional Info', 'class'=>'input-text')) }}
                                    <!--<input type="text" class="input-text">-->
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::submit('Deliver to this address', array('class'=>'btn btn-13 text-uppercase pull-right')) }}
                                    <!--<button class="btn btn-13 text-uppercase pull-right">Ship to this address</button>-->
                                </div>
                            
                            	</div>
                            {{Form::close()}}
                        
                        <!-- END DELIVERY INFO CHECK OUT FORM -->
    
                    </div>
                    
                    		<div class="col-md-4 col-sm-4">
                            
                            
                        <div class="sky-form boxed cartContent">
                        <h5 class="styleColor" style="text-align:center;">Cart Total</h5>
                        
                        <fieldset>
                        @foreach($cart_content as $content)
                        <section class="clearfix cart_totals">
                        
                        <p class="fsize16">
                        <span class="name">{{$content->name}}</span> x {{$content->qty}}
                        @if($content->qty==1)
                        <span class="simpleCart_total bold pull-right fsize18">₦ {{number_format($content->price * 1)}}</span>
                        @else
                        <span class="simpleCart_total bold pull-right fsize18">₦ {{number_format($content->price * $content->qty)}}</span>
                        @endif
                        </p>
                        
                        <p class="fsize16">Delivery<span class="simpleCart_total pull-right bold fsize18">₦ </span></p>
                        
                        </section>
                        @endforeach
                        
                        <section class="clearfix cart_totals">
                        <span class="pull-right fsize16"><p class="simpleCart_total bold fsize18">₦ {{number_format($carttotal)}}.00</p></span>
                        <span class="bold">Cart Subtotal</span>
                        </section>
                        
                        <section class="clearfix cart_totals">
                        <span class="pull-right fsize16">₦ </span>
                        <span class="bold">Delivery</span>
                        </section>
                        
                        <!--<section class="clearfix cart_totals">
                        <span class="pull-right fsize16">- ₦0.00</span>
                        <span class="bold">Coupon Discount</span>
                        </section>-->
                        
                        <section class="clearfix cart_totals noborder">
                        <span class="pull-right fsize20 bold styleColor">₦ {{number_format($carttotal)}}.00</span>
                        <span class="simpleCart_total bold fsize18" >ORDER TOTAL</span>
                        </section>
                        
                        </fieldset>
                        
                        </div>
                        
                  
                  			</div>
                  </div>
                  
                  
			</div>
		</section>
		<!-- END DELIVERY INFORMATION CHECK OUT -->

		
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