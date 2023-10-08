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
                
                @if(Session::has('uid'))
                
                @else

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
                    @endif

					
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
            	<h3 class="pull-left">Checkout</h3>
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
							      $id = Session::get('id');
							      $firstname = Session::get('firstname');
							      $lastname = Session::get('lastname');
								  $gender = Session::get('gender');
								  $email = Session::get('email');
								  $phone = Session::get('phone');
								  $country = Session::get('country');
								  $state = Session::get('state');
								  $city = Session::get('city');
								  $address = Session::get('address');
							
							  ?>
                              
            
            	<div class="row" >
                    <div class="col-md-8 col-sm-8">
                                    
                        <!-- DELIVERY INFO SUMMARY -->
                        
                     {{ Form::open(array('url' => 'checkout','class'=>'form check-out-form')) }}
                            <h4 style="text-align:center;">Delivery Summary</h4>
                            <center style="font-size:18px;margin-top:2%; font-weight:bold;">
                            <p>Name : {{$firstname}} &nbsp; {{$lastname}}</p>
                            <p>Email : {{$email}}</p>
                            <p>Phone : {{$phone}}</p>
                            <p>Gender : {{$gender}}</p>
                            <p>Address : {{$address}}</p>
                            <p>City : {{$city}}</p>
                            <p>State : {{$state}}</p>
                            <p>Country : {{$country}}</p>
                            
                            </center>
                            
                            		<div style="margin:0 auto; text-align:center; display:none;" id="loader">
                                      <img src="{{ URL::asset('images/loading.gif') }}" style="margin:0 auto;"/> please wait...
                                    </div>
											<fieldset>
                                                <div>
                                                
                                                <label class="radio">{{ Form::radio('payment', 'onDelivery', true, array('id'=>'radiocod')) }}
<i></i>Pay On Delivery</label>
                                                    <label class="radio">{{ Form::radio('payment', 'payPal') }}<i></i>Pay with card</label> 
                                                   
                                                </div>
                                                <div>
                                                       <div id="cashondelivery" style="display:none" >
                                                       
                                                      
                  {{ Form::submit('PLACE ORDER', array('class' => 'btn btn-9 pull-right bold')) }}
                                                       
                                                       </div>
                                               <div id="paypal" style="display:none" >
                                               
                                              
                  {{ Form::submit('MAKE PAYMENT', array('class' => 'btn btn-9 pull-right bold')) }}
                                               
                                               </div>
                                               
                                              
                                                
                                            </fieldset>

                            {{Form::close()}}
                        
                        <!-- END DELIVERY INFO SUMMARY -->
                    </div>
                    
                    		<!-- CART INFO -->
                            <div class="col-md-4 col-sm-4">
                            
                            
                        <div>
                        <h4 style="text-align:center;">Cart Total</h4>
                        
                        <fieldset>
                        @foreach($cart_content as $content)
                        @foreach($shippings as $shipping)
                        <?php
						$ship = $shipping->price;
						$totalShipping = $ship * $totalqty;
						$orderTotal = $carttotal + $totalShipping;
						
						
						?>
                        <section class="clearfix ">
                        
                        <p class="fsize16">
                        <span class="name">{{$content->name}}</span> x {{$content->qty}}
                        @if($content->qty==1)
                        <span class="cart_total bold pull-right fsize18">₦ {{number_format($content->price * 1)}}.00</span>
                        @else
                        <span class="cart_total bold pull-right fsize18">₦ {{number_format($content->price * $content->qty)}}.00</span>
                        @endif
                        </p>
                        
                        <p class="fsize16">Shipping
                        
                        @if($content->qty==1)
                   <span class="price pull-right bold fsize18">₦ {{number_format($shipping->price * 1)}}.00 </span>
                   @else
                   <span class="price pull-right bold fsize18">₦ {{number_format($shipping->price * $content->qty)}}.00 </span>
                   @endif
                   @endforeach
                   
                        </p>
                        
                        </section>
                        @endforeach
                        
                        <section class="clearfix cart_total">
                        <span class="pull-right fsize16"><p class="cart_total bold fsize18">₦ {{number_format($carttotal)}}.00</p></span>
                        <span class="bold">Cart Subtotal</span>
                        </section>
                        
                        <section class="clearfix cart_total">
                        <span class="pull-right fsize16">₦ {{number_format($totalShipping)}}.00 </span>
                        <span class="bold">Total Shipping</span>
                        </section>
                        
                        <!--<section class="clearfix cart_totals">
                        <span class="pull-right fsize16">- ₦0.00</span>
                        <span class="bold">Coupon Discount</span>
                        </section>-->
                        
                        <section class="clearfix cart_totals noborder">
                        <span class="pull-right fsize20 bold styleColor">₦ {{number_format($orderTotal)}}.00</span>
                        <span class="simpleCart_total bold fsize18" >ORDER TOTAL</span>
                        </section>
                        
                        </fieldset>
                        
                        </div>
                        
                  
                  			</div>
                            <!-- END CART INFO -->
                  </div>
                  
                  
			</div>
		</section>
		<!-- END DELIVERY INFORMATION CHECK OUT -->

		
        

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

if($('#radiocod').is(':checked')) { 

			$("#cashondelivery").show();
            $("#paypal").hide();

		}

if($('#radiopaypal').is(':checked')) { 

			 $("#paypal").show();
			$("#cashondelivery").hide();
           
		}


$("#radiocod").on("click",function(){
		
		if($('#radiocod').is(':checked')) { 
          
		 
			$("#cashondelivery").show();
            $("#paypal").hide();
		

		}
});

$("#radiopaypal").on("click",function(){
		
		
		if($('#radiopaypal').is(':checked')) { 

$('#loader').show();

        sendmail_to_admin();

        $('#messagefromserver').show();




			$("#paypal").show();
                        $("#cashondelivery").hide();

		}

});


$('#place_order').click(

function(){
	//getting information for the forms
	//validate();
	var fname=$('#txtfirstname').val();
	var lname=$('#txtlastname').val();
	var phone=$('#txtphone').val();
	var altphoneno=$('#txtaltphone').val();
	var txtstate=$('#txtstate').val();
	var txtcity=$('#txtcity').val();
	var txtpostcode=$('#txtpostcode').val();
	var txtaddress=$('#txtaddress').val();
	var txtemail=$('#txtemail').val();
	var txtinfo=$('#txtaddinfo').val();
	var cartdata=JSON.parse(localStorage.getItem('infos'));
	var cartdatastring=JSON.stringify(cartdata);
	
	// checking all the controls for emptiness
	if(fname==''){
		
		$('#txtfirstname').focus();
		
		
		
		}else if(lname==''){
			
			$('#txtlastname').focus();
			
		}else if(phone==''){
			$('#txtphone').focus();
			
		}else if(altphoneno==''){
			
			$('#txtaltphone').focus();
			
		}else if(txtstate==''){
			
			$('#txtstate').focus();
			
			
			}else if(txtcity==''){
				
				$('#txtcity').focus();
				
				
			}
	else if( txtpostcode==''){
		
	$('#txtpostcode').focus();
	}else if(txtaddress==''){
		
		$('#txtaddress').focus();
		
		
		}else if(txtemail==''){
			
			$('#txtemail').focus();
			
			}else if(txtinfo==''){
				$('#txtinfo').focus();
				
				
				
				}else{
					
				
				//sending the information to the server
				
			$('#loader').show();
				
			$.ajax({ 
			
                     type: 'POST', 
                     url: 'product_process.php', 
                     crossDomain: true,
                     data:  {
					 firstname:fname, 
					 lastname:lname,
					 phone_no:phone,
					 altphone:altphoneno,
					 state:txtstate,
					 city:txtcity,
					 postcode:txtpostcode,
					 address:txtaddress,
					 email:txtemail,
					 info:txtinfo,
					cart_data:cartdatastring
					 
					 },
                     dataType: 'json', 
                     async: false,
                     
                     success: function (response){ 
					 $('#loader').hide();
					   //$('#messagefromserver').text("Information saved successfully");
location.href='thankyou.php';
                     },
                     error: function(error){
						   $('#messagefromserver').css("color",red);
						     $('#messagefromserver').text("Information not saved");
                    }
          }); 

				}

}

);
/*function validate(){
	alert("Ïm here")
	 $("#checkout_form").validate({
									   rules:{
										   "txtfirstname":"required",
										   "txtlastname":"required",
										   "txtphone":{required:true,digits:true},
										   "txtstate":"required",
										   "txtcity":"required",
                                           "txtaddress":"required",
										   "txtemail":{required:true,digits:true}
										   
										   },
										messages:{
											txtfirstname:"Please enter your first name",
											txtlastname:"Please enter your last name",
											txtphone:{required:"Please enter your phone number",digits:"Only digits are allowed"},
											txtstate:"Please enter your current state",
 											txtcity:"Please enter your current city",
											txtaddress:"Please enter your address",
                                            txtemail:"Please enter your email address"
											}
									
								   });
		
	
	
	
}*/
function sendmail_to_admin(){
	
	var fname=$('#txtfirstname').val();
	var lname=$('#txtlastname').val();
	var phone=$('#txtphone').val();
	var altphoneno=$('#txtaltphone').val();
	var txtstate=$('#txtstate').val();
	var txtcity=$('#txtcity').val();
	var txtpostcode=$('#txtpostcode').val();
	var txtaddress=$('#txtaddress').val();
	var txtemail=$('#txtemail').val();
	var txtinfo=$('#txtaddinfo').val();
	var cartdata=JSON.parse(localStorage.getItem('infos'));
	var cartdatastring=JSON.stringify(cartdata);
	if(fname==''){
		
		$('#txtfirstname').focus();
		
		
		
		}else if(lname==''){
			
			$('#txtlastname').focus();
			
		}else if(phone==''){
			$('#txtphone').focus();
			
		}else if(altphoneno==''){
			
			$('#txtaltphone').focus();
			
		}else if(txtstate==''){
			
			$('#txtstate').focus();
			
			
			}else if(txtcity==''){
				
				$('#txtcity').focus();
				
				
			}
	else if( txtpostcode==''){
		
	$('#txtpostcode').focus();
	}else if(txtaddress==''){
		
		$('#txtaddress').focus();
		
		
		}else if(txtemail==''){
			
			$('#txtemail').focus();
			
			}else if(txtinfo==''){
				$('#txtinfo').focus();
				
				
				
				}else{
					
					$.ajax({ 
			
                     type: 'POST', 
                     url: 'product_process.php', 
                     crossDomain: true,
                     data:  {
					 firstname:fname, 
					 lastname:lname,
					 phone_no:phone,
					 altphone:altphoneno,
					 state:txtstate,
					 city:txtcity,
					 postcode:txtpostcode,
					 address:txtaddress,
					 email:txtemail,
					 info:txtinfo,
					cart_data:cartdatastring
					 
					 },
                     dataType: 'json', 
                     async: false,
                     
                     success: function (response){ 
					 $('#loader').hide();
					   $('#messagefromserver').text("Information has been sent for processing. You can now pay for your order");

                     },
                     error: function(error){
						   $('#messagefromserver').css("color",red);
						     $('#messagefromserver').text("Information not saved");
                    }
          }); 
					
					
					
					
					
					
					
					
				}
	
	
	
}

</script>  
   

    @stop