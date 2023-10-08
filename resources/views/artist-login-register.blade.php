
@extends('layouts.main')

@section('title')
Yarth: Artist Login/Register
@stop
@section('header')

<link rel="stylesheet" href="{{ URL::asset('css/library/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/jquery-ui.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/library/jquery.fancybox.css') }}">
	
	<!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/color-green.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}">
 <!-- LOADING -->
	<!--<div class="loading-container" id="loading">
		<div class="loading-inner">
			<span class="loading-1"></span>
			<span class="loading-2"></span>
			<span class="loading-3"></span>
		</div>
	</div>-->
	<!-- END LOADING -->
<div class="wrap-page ">
    
		<!-- HEADER -->
		<header class="header _2">
        
			
            <div class="container">

				<!-- HEADER CONTENT -->
				<div class="header-cn clearfix">

				
					<!-- LOGO -->
					<div class="logo">
						<a href="index"><img src="{{URL::asset('images/logo-mine.png')}}" alt=""></a>
					</div>
					<!-- END LOGO -->
                    
                    <div style="color:#81c223;">
                    <h1>ARTIST LOGIN PAGE</h1>
                    </div>
                    
                    
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
				<h3 class="pull-left">Login/Register</h3>
				<ul class="nav-breakcrumb  pull-right">
					<li><a href="#">Home</a></li>
					<li><span>Login/Register</span></li>
				</ul>

			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- LOGIN REGISTER -->
		<section class="log_in_out">
			<div class="container">
				<div class="row">
                <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('msg')}}</label></center><br/>

					<!-- LOGIN -->
					<div class="col-md-6">
					{{ Form::open(array('url'=>'artist-login', 'class'=>'form login')) }}
                    {{ csrf_field() }}
					  <div class="heading _two text-left panel">
							<h2>Existing Artist</h2>
						</div>
                        
                        <center> <span style="color:red;font-weight:bold">{{ Session::get('flash_error') }}</span></center>
						
						<div class="form panel">
							
                            <section class="form-group">
							<label>Email Address <sup>*</sup></label>
							{{ Form::email('loginemail', Input::old('loginemail'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'form-control')) }}
                            </section>
							
							<section class="form-group">
                            <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'form-control')) }}
                            </section>
							
							<div>
                               {{ Form::checkbox('remember', 'yes', array('class'=>'checkbox')) }}
								<label for="remember">Remember Me</label>
							</div>

							<p>
								<a href={{URL::to('password/remind')}}>Forgot your Password?</a>
							</p>

							{{ Form::submit('Log In', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
						</div>
                        {{ Form::close() }}

					</div>
					<!-- END LOGIN -->
					
					<!-- REGISTER -->
					<div class="col-md-6">
						{{ Form::open(array('url'=>'artist-signup', 'class'=>'form login')) }}
					  <div class="heading _two text-left panel">
							<h2>New Artist</h2>
						</div>

						<div class="form ">
							<section class="form-group">
							<label>First Name<sup>*</sup></label>
							{{ Form::text('firstname', Input::old('firstname'), array('placeholder'=>'First Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Other Name<sup>*</sup></label>
							{{ Form::text('othername', Input::old('othername'), array('placeholder'=>'Other Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Last Name<sup>*</sup>
                            </label>
							{{ Form::text('lastname', Input::old('lastname'), array('placeholder'=>'Last Name','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Artist Name(Username)<sup>*</sup>
                            </label>
							{{ Form::text('artist_name', Input::old('artist_name'), array('placeholder'=>'Artist Name(Username)','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Email Address <sup>*</sup></label>
							{{ Form::email('email', Input::old('email'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
						  <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
							<label>Confirm Password <sup>*</sup></label>
							{{ Form::password('confirm_password', array('placeholder'=>'Confirm Password','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                             <section class="form-group">
                          <label>Gender<sup>*</sup>
                            </label>
							{{ Form::select('gender', array('unspecified'=>'Unspecified', 'male'=>'Male', 'female'=>'Female'), array('unspecified'=>'Unspecified', 'male'=>'Male', 'female'=>'Female'), array('placeholder'=>'Gender', 'required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Country Of Residence<sup>*</sup>
                            </label>
							{{ Form::select('country', $country , Input::old('country'), array('placeholder'=>'Country', 'required'=>'required', 'id'=>'country', 'class'=>'form-control')) }}
                            </section>
                            
                            <p id="loader" style="display:none;" >please wait...</p>
                            
                            <section class="form-group"  id="state">
                          <label>State Of Residence<sup>*</sup>
                            </label>
							{{ Form::select('state', array(), 'None', array('placeholder'=>'State', 'required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                             <label>City<sup>*</sup></label>
							{{ Form::text('city', Input::old('city'), array('placeholder'=>'City','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Residential Address<sup>*</sup></label>
                            {{ Form::textarea('address', '', array('placeholder'=>'Residential Address','class'=>'form-control','size' => '30x3','required'=>'required')) }}
                            </section>
                            
                            <section class="form-group">
                            <label>Phone Number<sup>*</sup>
                            </label>
							{{ Form::text('phone', Input::old('phone'), array('placeholder'=>'Phone Number','required'=>'required', 'class'=>'form-control')) }}
                            </section>
                            
                            <section class="form-group">
                            <label for="remember"> 
                               {{ Form::checkbox('Accept', 'yes', array('required'=>'required', 'checked'=>'checked', 'disabled'=>'disabled',  'class'=>'checkbox')) }} I have read and accepted the <a href="#">terms of service</a></label>
                               {{ Form::submit('Register', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
                               </section>

						</div>
                        {{ Form::close() }}

					</div>

					<!-- END REGISTER -->

				</div>
			</div>
		</section>
		<!-- END LOGIN REGISTER -->
        </div>
        </div>

		<!-- FOOTER -->
		<footer class="dark">
			<div class="footer-b">
				<div class="container">
					<div class="row">

						<div class="col-md-9 col-md-pull-9 copyright">
							<p>
								&copy; 2019 <a href="https://yarth.com/" title="MegaDrupal">Young Art House</a> - All Rights Reserved.
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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
    
     <script type='text/javascript'>
		
	var cloud = {
	get:function(country_id){
		$("#loader").css({display:"block"});
		$("#state").css("display","none").find("select").empty();
			 $.ajax({
			  type:"GET",
			  url:"state",
			  data:{
				  country_id:country_id
				  },
				success: function(res){
					 $("#loader").css({display:"none"});
					 var contents = [];
					for (var a in res)
					{
						var option = $("<option></option>");
						option.attr({value:res[a].state_id});
						option.html(res[a].state);
						contents.push(option);
					}
					$("#state").css("display","block").find("select").append(contents);
					},
					error:function(res){
					$("#loader").css({display:"none"});
					console.log(res);
					}
			  });
	
			  
			  }
	
	}
	
	
 

$("#country").change(function(){
	
	cloud.get(this.value);
	});



        
        </script>


@stop