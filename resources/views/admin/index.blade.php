@extends('layouts.admin-main')

@section('title')
Yarth: Admin Page
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
		<!--<section class="breakcrumb">
			<div class="container">
				
				<ul class="nav-breakcrumb">
					<li><a href="{{URL::to('artist/profile')}}">< Back to profile</a></li>
					
				</ul>

			</div>
		</section>-->
		<!-- END BREAKCRUMB -->
		
        <!-- UPLOAD -->
		<section class="blog">
			<div class="container">
				<div class="row">
                	<div class="col-md-3">
						
						<!-- WIDGET CATEGORIES -->
						<aside class="widget widget_categories ">
							<h4 class="widget-title">ADMIN HOME</h4>
							
                            
                                        <ul>
                                             <li><a href="{{URL::to('admin/upload')}}">Upload Artworks</a></li>    
                                        </ul>
                                        <ul>
                                        	<li><a href="{{URL::to('admin/view-edit-artworks')}}">View/Edit Artworks</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/view_all_orders')}}">View All Orders</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/view_artists')}}">View All Artists</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/view_vendors')}}">View All Vendors</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/view_customers')}}">View All Customers</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/delivery')}}">Delivery</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/add_admin')}}">Add Admin</a></li>
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
                            	<div class="col-md-2">
                                  <div class="panel panel-primary reviews-container text-center">
                                      <i class="fa fa-user fa-2x"></i>
                                      <div>Total Artists</div>
                                      <div>{{$total_artists}}</div>
                                  </div>
                                </div>
                            	<div class="col-md-2">
                                  <div class="panel panel-primary reviews-container text-center">
                                      <i class="fa fa-user fa-2x"></i>
                                      <div>Total Vendors</div>
                                      <div>{{$total_vendors}}</div>
                                  </div>
                                </div>
                               <div class="col-md-2">
                                  <div class="panel panel-primary reviews-container text-center">
                                      <i class="fa fa-user fa-2x"></i>
                                      <div>Total Customers</div>
                                      <div>{{$total_customers}}</div>
                                  </div>
                              </div>
                               <div class="col-md-2">
                                  <div class="panel panel-primary reviews-container text-center">
                                      <i class="fa fa-shopping-cart fa-2x"></i>
                                      <div>Total Orders</div>
                                      <div>{{$total_orders}}</div>
                                  </div>
                              </div>
                              
                              <div class="col-md-2">
                                  <div class="panel panel-primary reviews-container text-center">
                                      <i class="fa fa-shopping-cart fa-2x"></i>
                                      <div>Pending Orders</div>
                                      <div>{{$total_orders_pending}}</div>
                                  </div>
                              </div>
                               <div class="col-md-2">
                                  <div class="panel panel-primary reviews-container text-center">
                                      <i class="fa fa-shopping-cart fa-2x"></i>
                                      <div>Total Sales</div>
                                      <div>{{$total_sales}}</div>
                                  </div>
                              </div>
          					</div> 
                        
                       <div class="row">
                              <div class="col-md-12">
                                  <div class="panel panel-primary reviews-container text-center">
                                   
                                     <h1>Latest 10 Orders</h1><br/><br/>
                                      
                                      <div class="table-responsive"> 
                                 <table class="table table-bordered" >
                                  <tr>
                                    <th >S/N</th>
                                    <th >Order Id</th>
                                    <th >Vendor Id</th>
                                    
                                    <th >Customer Name</th>
                                     <th >Phone</th>
                                    
                                    <th >Art Name</th>
                                    <th >Art Price</th>
                                    <th >Qty</th>
                                    <th >Total</th>
                                    <th >Delivered</th>
                                    <th >Status</th>
                                    <th >Date Added</th>
                                   
                                  </tr>
                                  <?php $i=1; ?>
                                   @foreach($last_orders as $last_order)
                                     
                                  <tr>
                                   <td >{{$i}}</td>
                                    <td >{{$last_order->order_id}}</td>
                                     <td >{{$last_order->artist_id}}</td>
                                     
                                    <td >{{$last_order->cust_firstname}} &nbsp;{{$last_order->cust_lastname}}</td>
                                    <td >{{$last_order->cust_phone}}</td>
                    
                                    <td >{{$last_order->art_name}}</td> 
                                    <td >₦{{$last_order->price}}</td>
                                     <td >{{$last_order->quantity}}</td>
                                    <td >₦{{$last_order->quantity * $last_order->price}}</td>
                                    <td >{{$last_order->delivered}}</td>
                                    <td >{{$last_order->status}}</td>
                                    <td >{{$last_order->created_at}}</td> 
                                   
                                   
                                  </tr>
                               <?php $i++ ?>
                                  @endforeach
                                </table>
                                		</div>  
                                  
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
         
   


@stop