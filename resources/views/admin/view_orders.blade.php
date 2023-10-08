@extends('layouts.admin-main')

@section('title')
Yarth: Admin-View Orders
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

				
					<!-- LOGO -->
					<div class="logo">
						<a href="{{URL::to('index')}}"><img src="{{URL::asset('images/logo-mine.png')}}" alt=""></a>
					</div>
					<!-- END LOGO -->
                    
                    <div style="color:#81c223;">
                    <h1>ADMIN HOME</h1>
                    </div>
                    
				</div>
				<!-- END HEADER CONTENT -->

			</div>
		</header>
		<!-- END HEADER -->
        
@stop

@section('body')

<!-- BREAKCRUMB -->
		<section class="breakcrumb">
			<div class="container">
				
				<ul class="nav-breakcrumb">
					<li><a href="{{URL::to('admin/index')}}">< Back to admin page</a></li>
					
				</ul>

			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
        <!-- UPLOAD -->
		<section class="blog">
			<div class="container">
				<div class="row">
                	<div class="col-md-3">
						
						<!-- WIDGET CATEGORIES -->
						<aside class="widget widget_categories ">
							<h4 class="widget-title">VIEW ORDERS</h4>

                                        <ul>
                                        	 <li><a href="{{URL::to('admin/view_all_orders')}}">View All Orders</a></li>
                                        </ul>
                                        <ul>
                                			<li><a href="{{URL::to('logoutadmin')}}">Logout</a></li>
										</ul>
						</aside>
						<!-- END WIDGET CATEGORIES -->

						<!-- WIDGET PHOTO SLIDE -->
						<!--<aside class="widget widget_photo_slide">
							<h4 class="widget-title">Photo Slider</h4>
							<div class="photo-slide">
								<div id="photo_slide">
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
									<a href="#"><img src="images/blog/img-4.jpg" alt=""></a>
								</div>
							</div>
						</aside>-->
						<!-- END WIDGET PHOTO SLIDE -->
					</div>
                    
                    <!-- UPLOAD HERE -->
					<div class="col-md-9">
                    	
                    	
   							<div class="" style="font-size:18px; text-align:center; font-weight:bold;"> </p></div>
          					
                            
                       <div class="row">
                                  <div class=" box col-md-12 panel panel-primary reviews-container">
                                   
                                  <center><h1 style="color:green">Yarth Orders</h1>
                                  <p style="color:green">{{Session::get('delivered_msg')}}</p>
                                  <p style="color:green">{{Session::get('paid_msg')}}</p>
                                  </center>
                                      
                                      <div class="table-responsive"> 
                                 <table class="table table-bordered" >
                                  <tr>
                                   <!--  <th >S/N</th>-->
                                    <th >Order Id</th>
                                    <th >Artist/Vendor Name</th>
                                    <th >Customer Name</th>
                                    <th >Address</th>
                                    <th >Phone</th> 
                                    <th >Art/Tools Name</th>
                                    <th >Price</th>
                                    <th >Qty</th>
                                    <th >Total</th>
                                    <th >Delivered</th>
                                    <th >Confirm delivery</th>
                                    <th >Payment Status</th>
                                    <th >Confirm Payment</th>
                                    <th >Date Added</th>
                                    
                                  </tr>
                                  <?php $i = 1; ?>
                                   @foreach($order_details as $order_detail)
                                     
                                  <tr>
                                 <!--  <td >{{$i}}</td>-->
                                    <td >{{$order_detail->order_id}}</td> 
                                    <td >{{$order_detail->artist_name}}</td>
                                     
                                    <td >{{$order_detail->cust_firstname}} &nbsp;{{$order_detail->cust_lastname}}</td>
                                    <td >{{$order_detail->cust_address}}</td>
                                    <td >{{$order_detail->cust_phone}}</td>
                                   
                                    <td >{{$order_detail->art_name}}</td> 
                                    <td >₦{{$order_detail->price}}.00</td>
                                    <td >{{$order_detail->quantity}}</td>
                                    <td >₦{{$order_detail->quantity * $order_detail->price}}.00</td>
                                    <td >{{$order_detail->delivered}}</td>
                                       <?php 
                    
                                   $delivered_artlink = "admin/deliver_art/".$order_detail->id;
								   $paid_artlink = "admin/payfor_art/".$order_detail->id;
                    
                                   ?>
                    
                                    <td ><a href={{URL::to($delivered_artlink)}} class="btn btn-sm btn-9">Confirm</a></td> 
                                    <td >{{$order_detail->status}}</td>
                                    <td ><a href={{URL::to($paid_artlink)}} class="btn btn-sm btn-9">Confirm</a></td>
                                    <td >{{$order_detail->created_at}}</td> 
                                   
                                   
                                  </tr>
                               <?php $i++; ?>
                                  @endforeach
                                </table>
                                		</div>  
                                  
                                  </div>
                              
    					</div>
	
					</div>
                    <!-- END UPLOAD HERE -->

                	</div>
				</div>
			</div>
		</section>
		<!-- UPLOAD -->

		
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
		<div id="scroll-top" class="_2" >Scroll Top</div>
		<!-- END SCROLL TOP -->

	</div>
    
    <!-- Library JS -->
	<script src="{{ URL::asset('js/library/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.ui.touch-punch.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/parallax.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.countdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.mb.YTPlayer.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.responsiveTabs.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.fancybox.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/SmoothScroll.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/isotope.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/library/jquery.colio.min.js') }}" type="text/javascript"></script>
    

	<!-- Main Js -->
	<script src="{{ URL::asset('js/script.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/crop.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/scriptc.js') }}" type="text/javascript"></script>
   <script src="{{ URL::asset('js/templatemo_script.js') }}" type="text/javascript"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
   
     <script>
 var delete_art = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_delete= confirm("Are you sure you want to delete?");
	 if(do_delete)
	 {
		 window.location = loc;
	 }
	 
 }
  
  
  var activate_artist = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_activate= confirm("Are you sure you want to activate?");
	 if(do_activate)
	 {
		 window.location = loc;
	 }
	 
 }
  
    var deactivate_artist = function(_link)
 {
	 event.preventDefault();
	 var loc = _link.href;
	 var do_deactivate= confirm("Are you sure you want to de-activate?");
	 if(do_deactivate)
	 {
		 window.location = loc;
	 }
	 
 }
  
  
  </script>      
   


@stop