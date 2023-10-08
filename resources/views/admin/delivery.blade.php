@extends('layouts.admin-main')

@section('title')
Yarth: Admin-Delivery
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
							<h4 class="widget-title">DELIVERY</h4>

                                        <ul>
                                        	 <li><a href="{{URL::to('admin/delivery')}}">Delivery</a></li>
                                        </ul>
                                        <ul>
                                        	 <li><a href="{{URL::to('admin/add_delivery')}}">Add Delivery</a></li>
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
                    
                    <!-- DELIVERY FORM -->
					<div class="col-md-9">
                       <div class="row">
                                  
                                  
                                  
                                      <div class="panel panel-primary reviews-container " style="margin-top:5%;">
             <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('delivery_msg')}}</label></center><br/>
                                      
                                          
                                          @if(isset($delivery_details))
                                          @foreach($delivery_details as $delivery_detail)
                                          
                                          <?php
                                 
								 		$did=$delivery_detail->did;
							
								 			?>
                                          <div class="col-md-4">
                                          <div>
                                           @if($delivery_detail->price != "")
                                          <h3>Update Delivery Fare</h3>
                                          <p><span>{{$delivery_detail->state}} </span><b id="pull-right">₦ {{$delivery_detail->price}}</b></p>
                                          @else
                                          <h1>Add Delivery Fare</h1>
                                          @endif
                                          
                                          </div>
                                          <div class="box-content">
                                          
                                        
                                        
                                        {{ Form::open(array('url' => 'admin/delivery','class'=>'form')) }}
                                        
                                    <p> {{ Form::text('price', Input::old('price'),array('placeholder' => 'Delivery Fare','class'=>'form-control','style'=>'border-radius:5px','required'=>'required')) }}</p>
                                    
                                    	{{ Form::hidden('delivery_id',$did ) }}
                                
                                    <center>        
                                   @if($delivery_detail->price != "")
                             {{ Form::submit('Update', array('class' =>'bold btn btn-9','style'=>'font-weight:bold; padding:8px 10px')) }}
                                   @else
                             {{ Form::submit('Submit', array('class' =>'bold btn btn-9','style'=>'font-weight:bold; padding:8px 10px')) }}
                                   @endif
                                   
                                  </center>     
                                         {{ Form::close() }}
                                          
                                          </div>
                                          </div>
                                          
                                          @endforeach
                                          @endif
                                          
                                      </div>
                                      </div>
                                      </div>
                                      
                                  <div style="text-align:center">{{$delivery_details->links()}}</div>
                                  
                                  
                                  

                              
    					</div>
					</div>
                    <!-- END DELIVERY FORM -->

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
  var update_fare = function(button)
  {  
    $.ajax({
		url:"{{url('admin/delivery')}}",
		type:"post",
        data:{
		    
			 price:button.parent().parent().find('[name=price]').val(),
			   
			   delivery_id:button.parent().parent().find('[name=delivery_id]').val()
		  },
      success: function(result){
		  var message = $("<div id = 'update_msg'></div>").html("Fare Successfully Updated!");
		  $(button.parent().parent()).append(message);
          $(message).delay(550).fadeOut("slow",
		  function(){
			  message.remove();
			  });
    },
	error: function(res)
	{
		console.error(res);
		alert("Opps! sorry an error occured.")
	}
	});
  }
  
  </script> 


@stop