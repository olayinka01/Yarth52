@extends('layouts.upload-main')

@section('title')
Yarth: Artist-Upload Page
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
                    <h1>ARTIST UPLOAD PAGE</h1>
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
					<li><a href="{{URL::to('artist/profile')}}">< Back to profile</a></li>
					
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
							<h4 class="widget-title">ARTWORKS UPLOAD</h4>
							
                            
                                        <ul>
                                        
                                            <li><a href="{{URL::to('artist/upload')}}">Upload Artworks</a></li>
                                            
                                        </ul>
                                        
                                        <ul>
                                        	
                            				
                                        	<li>
                                            	<a href="{{URL::to('artist/view-edit-artworks')}}">Edit Artworks</a>
                                            </li>
                                            
                                            
                                        </ul>
                                        
                                        <ul>

                                            <li><a href="{{URL::to('')}}">View Orders</a></li>
                                            
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
                    
                    <!-- UPLOAD HERE -->
					<div class="col-md-9">
                    
                    		<?php
							$artist_lastname = $artist_details->lastname;
							$artist_firstname = $artist_details->firstname;
							$artist_fullname = $artist_lastname .' ' .$artist_firstname;
							
							?>
                    
                    	
   							<div class="" style="font-size:18px; text-align:center; font-weight:bold"><p>Welcome {{$artist_details->artist_name}} </p></div>
          					<div class="">
              					<div class="panel panel-primary reviews-container text-center">
                  				<i class="fa fa-shopping-cart fa-2x"></i>
                  					<div>Total Artworks</div>
                  					<div>{{$totalArtworks}}</div>
              					</div>
          					</div>

              					<div class="panel panel-primary reviews-container text-center">
									<p style="color:green;">{{Session::get('status')}}</p>
              						<p style="color:red;">{{Session::get('img_error')}}</p>
									
                                    <div><h5 id="bold">UPLOAD YOUR ARTWORKS HERE</h5></div>
                        
                       		<div class="box-content">
                       <!-- FORM UPLOAD -->
						
						{{ Form::open(array('url'=>'artist/upload', 'class'=>'form', 'files'=>'true')) }}
						
                           <section class="form-group">
							<label id="bold">CATEGORY TYPE<sup>*</sup></label>
							{{ Form::select('artwork_categorytype', $categorytype, Input::old('artwork_categorytype'), array('required'=>'required', 'id'=>'categorytype', 'class'=>'form-control')) }}
                            </section>
                                            
                            <p id="loader" style="display:none;" >please wait...</p>
                            
                             <section class="form-group" id="category">
							<label id="bold">ARTWORK CATEGORIES<sup>*</sup></label>
							{{ Form::select('artwork_category', array(), 'None', array('required'=>'required', 'id'=>'artcategory', 'class'=>'form-control')) }}
                            </section>
                            
                           <p id="loader1" style="display:none;" >please wait...</p>
                            
                             <section class="form-group" id="subcategory">
							<label id="bold">ARTWORK SUB-CATEGORIES<sup>*</sup></label>
							{{ Form::select('artwork_subcategory', array(), 'None', array('required'=>'required', 'id'=>'artsubcategory', 'name'=>'artwork_subcategory', 'class'=>'form-control')) }}
                            </section>
                            
                            <p id="loader2" style="display:none;" >please wait...</p>
                            
                             <section class="form-group" id="subsubcategory">
							<label id="bold">ARTWORK SUB-SUBCATEGORIES<sup>*</sup></label>
							{{ Form::select('artwork_subsubcategory', array(), 'None', array('required'=>'required', 'id'=>'artsubsubcategory', 'name'=>'artwork_subsubcategory', 'class'=>'form-control')) }}
                            </section>
                            
                            <p id="loader3" style="display:none;" >please wait...</p>
                            
                             <section class="form-group" id="subsubsubcategory">
							<label id="bold">ARTWORK SUB-SUBSUBCATEGORIES<sup>*</sup></label>
							{{ Form::select('artwork_subsubsubcategory', array(), 'None', array('required'=>'required', 'name'=>'artwork_subsubsubcategory', 'class'=>'form-control')) }}
                            </section>
							
							<section class="form-group">
                            <label id="bold">ARTIST NAME <sup>*</sup></label>
							{{ Form::text('artist_name', $artist_fullname, array('placeholder'=>'Enter First & Last Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label id="bold">ARTWORK NAME <sup>*</sup></label>
							{{ Form::text('artwork_name', Input::old('artwork_name'), array('placeholder'=>'Enter Artwork Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label id="bold">ARTWORK PRICE <sup>*</sup></label>
							{{ Form::number('artwork_price', Input::old('artwork_price'), array('placeholder'=>'Enter Artwork Price','required'=>'required', 'class'=>'form-control', 'min'=>'1')) }}
                            </section>
                            <section class="form-group">
                            
                            <div class="row" style="margin-top:5%;"> 
                  
                  
                       <div class="col-md-8 col-md-offset-2">
                         
                        <p> <label id="bold">ARTWORK IMAGE (Dimension = 400px &times; 350px and Type = PNG) </label> </p>
                      <div class="pic-box" style="margin:0 auto;">
                   <img id="image-file1" src="{{ URL::asset('img/icons/default.png')}}"/>
                           </div>        
                        {{ Form::button('Select', array('class' => 'btn btn-4 btn-submit text-uppercase','style'=>'margin-top:15px;background:#81c223','onClick'=> "crp.show(this,'artwork_image1')")) }}
                        {{ Form::hidden('artwork_image1', 'secret', array('id' => 'artwork_image1')) }}
                        
                        </div>	
                        
                        </div>
                        
                        </section>				
                            
                            <section class="form-group">
                            <label id="bold">ARTWORK DESCRIPTION <sup>*</sup></label>
							{{ Form::textarea('artwork_description', '', array('maxlength'=>'350','placeholder'=>'Enter Art Description...', 'class'=>'form-control')) }}
                            </section>
                            
                                                      
                            <center>
                               {{ Form::submit('Upload', array('class'=>'btn btn-4 btn-submit text-uppercase', 'style'=>'margin-top:15px;background:#81c223')) }}
                            </center>

						
                        {{ Form::close() }}

						</div>

					<!-- FORM UPLOAD -->
                    			
	
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
         
    <script type="text/javascript">
	
 var cloud = {
	 get:function(ctid){
		 $("#loader").css({display:"block"});
		 $("#category").css("display","none").find("select").empty();
		  $.ajax({
			  type:"GET",
			  url:"{{url('category')}}?ctid="+ctid,
				success: function(res){
					 $("#loader").css({display:"none"});
					 var contents = [];
					for (var a in res)
					{
						var option = $("<option></option>");
						option.attr({value:res[a].cid});
						option.html(res[a].cat_name);
						contents.push(option);
					}
					$("#category").css("display","block").find("select").append(contents);
					},
					error:function(res){
					$("#loader").css({display:"none"});
					console.log(res);
					}
			  });
		 }
	 }
	 
	 var subcloud = {
	 get:function(cid){
		 $("#loader1").css({display:"block"});
		 $("#subcategory").css("display","none").find("select").empty();
		  $.ajax({
			  type:"GET",
			  url:"{{url('subcategory')}}?cid="+cid,
			  data:{
				  cid:cid
				  },
				success: function(res){
					 $("#loader1").css({display:"none"});
					 var contents = [];
					for (var a in res)
					{
						var option = $("<option></option>");
						option.attr({value:res[a].scid});
						option.html(res[a].subcat_name);
						contents.push(option);
					}
					$("#subcategory").css("display","block").find("select").append(contents);
					},
					error:function(res){
					$("#loader1").css({display:"none"});
					console.log(res);
					}
			  });
		 }
	 }
	 
	  var subsubcloud = {
	 get:function(scid){
		 $("#loader2").css({display:"block"});
		 $("#subsubcategory").css("display","none").find("select").empty();
		  $.ajax({
			  type:"GET",
			  url:"{{url('subsubcategory')}}?scid="+scid,
			  data:{
				  scid:scid
				  },
				success: function(res){
					 $("#loader2").css({display:"none"});
					 var contents = [];
					for (var a in res)
					{
						var option = $("<option></option>");
						option.attr({value:res[a].sscid});
						option.html(res[a].subsubcat_name);
						contents.push(option);
					}
					$("#subsubcategory").css("display","block").find("select").append(contents);
					},
					error:function(res){
					$("#loader2").css({display:"none"});
					console.log(res);
					}
			  });
		 }
	 }
	 
	 var subsubsubcloud = {
	 get:function(sscid){
		 $("#loader3").css({display:"block"});
		 $("#subsubsubcategory").css("display","none").find("select").empty();
		  $.ajax({
			  type:"GET",
			  url:"{{url('subsubsubcategory')}}?sscid="+sscid,
			  data:{
				  sscid:sscid
				  },
				success: function(res){
					 $("#loader3").css({display:"none"});
					 var contents = [];
					for (var a in res)
					{
						var option = $("<option></option>");
						option.attr({value:res[a].ssscid});
						option.html(res[a].subsubsubcat_name);
						contents.push(option);
					}
					$("#subsubsubcategory").css("display","block").find("select").append(contents);
					},
					error:function(res){
					$("#loader3").css({display:"none"});
					console.log(res);
					}
			  });
		 }
	 }

$("#categorytype").change(function(){
	
	cloud.get(this.value);

});	

$("#artcategory").change(function(){
	
	subcloud.get(this.value);
	});
	
$("#artsubcategory").change(function(){
	
	subsubcloud.get(this.value);
	});
	
$("#artsubsubcategory").change(function(){
	
	subsubsubcloud.get(this.value);
	});


</script>


@stop