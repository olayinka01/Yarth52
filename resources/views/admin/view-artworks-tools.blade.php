@extends('layouts.admin-main')

@section('title')
Yarth: Artist-Edit Page
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
                    <h1>ARTIST EDIT PAGE</h1>
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
					<li><a href="{{URL::to('artist/upload')}}">< Back to Upload</a></li>
					
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
							<h4 class="widget-title"><a href="{{URL::to('artist/view-artworks-tools')}}">EDIT ARTWORKS</a></h4>
							
                            			<ul>
                            				@foreach($menucate1 as $menucate)
                                            <?php $menuLink = 'artist/view-artworks-tools/'.$menucate->cattype_id.'/'.$menucate->cid ?>
                                        	<li>
                                            	<a href={{URL::to($menuLink)}}>{{$menucate->cat_name}}</a>
                                            </li>
                                            @endforeach
                                            
                                            @foreach($menucate2 as $menucate)
                                            <?php $menuLink = 'artist/view-artworks-tools/'.$menucate->cattype_id.'/'.$menucate->cid ?>
                                        	<li>
                                            	<a href={{URL::to($menuLink)}}>{{$menucate->cat_name}}</a>
                                            </li>
                                            @endforeach
                                            
                                            @foreach($menucate3 as $menucate)
                                            <?php $menuLink = 'artist/view-artworks-tools/'.$menucate->cattype_id.'/'.$menucate->cid ?>
                                        	<li>
                                            	<a href={{URL::to($menuLink)}}>{{$menucate->cat_name}}</a>
                                            </li>
                                            @endforeach
                                            
                                            @foreach($menucate4 as $menucate)
                                            <?php $menuLink = 'artist/view-artworks-tools/'.$menucate->cattype_id.'/'.$menucate->cid ?>
                                        	<li>
                                            	<a href={{URL::to($menuLink)}}>{{$menucate->cat_name}}</a>
                                            </li>
                                            @endforeach
                                            
                                            @foreach($menucate5 as $menucate)
                                            <?php $menuLink = 'artist/view-artworks-tools/'.$menucate->cattype_id.'/'.$menucate->cid ?>
                                        	<li>
                                            	<a href={{URL::to($menuLink)}}>{{$menucate->cat_name}}</a>
                                            </li>
                                            @endforeach
                                            
                                            @foreach($menucate6 as $menucate)
                                            <?php $menuLink = 'artist/view-artworks-tools/'.$menucate->cattype_id.'/'.$menucate->cid ?>
                                        	<li>
                                            	<a href={{URL::to($menuLink)}}>{{$menucate->cat_name}}</a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                         
                                         <ul>
                                            <li><a href="{{URL::to('')}}">View Order</a></li>
                                         </ul>
                                         
                                         <ul>
                                            <li><a href="{{URL::to('logout')}}">Logout</a></li>
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
                    
                    <!-- EDIT HERE -->
					<div class="col-md-9">
                    	
                    	
   							<div class="" style="font-size:18px; text-align:center; font-weight:bold">
                            
                            @if(isset($cat))                
                            <p>{{$cat->cat_name}}</p>
                            @endif
                            
                            
                            
                            </div>
          					<div class="">
              					<div class="panel panel-primary reviews-container text-center">
                  				<i class="fa fa-shopping-cart fa-2x"></i>
                  					<div>Total Artworks</div>
                  					<div>{{$totalArtworks}}</div>
              					</div>
          					</div>

              					

                       <!-- EDIT ARTWORKS -->
                       
                       <div class="box-content">
                       
						@if(isset($artwork_details))
                   		@foreach($artwork_details as $artwork_detail)
										<?php
                                 $img_name=$artwork_detail->image;
								 $artworkid=$artwork_detail->aid;
								 $cattype = $artwork_detail->cattype_id;	
								 $cat = $artwork_detail->cat_id;
								 $subcat = $artwork_detail->subcat_id;
								 $subsubcat = $artwork_detail->subsubcat_id;
								 $subsubsubcat =  $artwork_detail->subsubsubcat_id;
								 //$deleteArtwork_link = "artist/delete_artwork"				
								 $deleteArtwork_link = "admin/delete_artwork/".$cattype."/".$cat."/".$subcat."/".$subsubcat."/".$subsubsubcat."/".$artworkid;
								
								 ?>
                          <div class='col-md-4 col-sm-4 shop-item-list shop-item-smaller product product-edit'>
									<figure>
				<img  class='img-responsive img'  src='{{URL::asset("yarthimages/artworks/$artwork_detail->image")}}' alt=''/>
									
									</figure>
									<div class='product-info'>
											  {{ Form::open(array('url' => 'artist/view-artworks-tools')) }}  
                                      <p class="_inpt"><span>Name</span>{{ Form::text('artwork_name',$artwork_detail->name ) }}</p>

                                  
                                   <p class="_inpt"><span>Price (₦)</span>{{ Form::text('price',$artwork_detail->unit_price ) }}</p>
                       
                                   
                             
                                                {{ Form::hidden('artwork_id',$artworkid ) }}
                                     

											<div class="pull-right" style="margin-right:6px;">
                                 {{ Form::button('Update', array('class' 
                                 => 'item_add btn btn-success','style'=>'border-radius:5px;padding:7px', 'type'=>'button', 'id'=>'update','onclick'=>'update_artwork($(this))')) }}    
                                                {{Form::close()}}
                                                
                               <a class="item_add btn btn-danger" onclick="delete_artwork(this)" id="delete"  style="margin-left:5px;border-radius:5px" href={{URL::to($deleteArtwork_link)}}>Delete</a>
                               				</div>
                                            <p class="clearfix" style="margin:0; padding:0;"></p>
								    </div>	
						   </div>
                                 @endforeach
                                 @endif	
						
						</div>

					<!-- END EDIT ARTWORKS -->
                    			<div style="text-align:center">{{$artwork_details->links()}}</div>
                                
                                
                                </div>
                                
                                
	
					</div>
                    <!-- END EDIT HERE -->
                    
                    

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
  var update_artwork = function(button)
  {  
    $.ajax({
		url:"{{url('artist/view-edit-artworks')}}",
		type:"post",
        data:{
		    artwork_name:button.parent().parent().find('[name=artwork_name]').val(),
			 price:button.parent().parent().find('[name=price]').val(),
			   
			   artwork_id:button.parent().parent().find('[name=artwork_id]').val()
		  },
      success: function(result){
		  var message = $("<div id = 'update_msg'></div>").html("Artwork Successfully Updated!");
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
 var delete_artwork = function(_link)
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