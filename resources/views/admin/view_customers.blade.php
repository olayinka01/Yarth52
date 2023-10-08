@extends('layouts.admin-main')

@section('title')
Yarth: Admin-View Artists
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
							<h4 class="widget-title">VIEW CUSTOMERS</h4>

                                        <ul>
                                        	 <li><a href="{{URL::to('admin/view_customers')}}">View All Customers</a></li>
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
                                   
                                  <center><h1 style="color:green">Yarth Customers</h1>
                                  <p style="color:green">{{Session::get('del_msg')}}</p>
                                  </center>
                                      
                                      <div class="table-responsive"> 
                                 <table class="table table-bordered" >
                                      <tr>
                                      <!-- <th >S/N</th>-->
                                        <th >Id</th>
                                        <th >Artist Name</th>
                                        <th >Gender</th>
                                        <th >Email</th>
                                        <th >Phone</th>
                                        <th >Address</th>
                                        <th >State</th>
                                        <th ><center>Actions</center></th>
                                        
                                       
                                      </tr>
                                      <?php $i = 1; ?>
                                       @foreach($customer_details as $customer_detail)
                                      <tr>
                                    <!-- <td >{{$i}}</td> -->
                                        <td >{{$customer_detail->uid}}</td>
                                        <td >{{$customer_detail->firstname}} &nbsp;{{$customer_detail->lastname}}</td>
                                        <td >{{$customer_detail->gender}}</td>
                                        <td >{{$customer_detail->email}}</td>
                                        <td >{{$customer_detail->phone}}</td>
                                        <!-- <td >{{--$vendor_detail->bank_name--}}</td> -->
                                        <!-- <td >{{--$vendor_detail->act_no--}}</td>  -->
                                       
                        <td >{{$customer_detail->address}} {{$customer_detail->city}}</td>
                                       
                                        <td >{{$customer_detail->state}}</td>
                                       
                                       
									    
                                        <td ><a href="#" class="btn btn-8">Delete</a></td> 
                                       
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

  </script>      
   


@stop