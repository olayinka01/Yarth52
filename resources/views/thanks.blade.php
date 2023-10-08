@extends('index')

@section('title')
Yarth: Thanks
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
						<a href="index"><img src="{{URL::asset('images/logo-mine.png')}}" alt=""></a>
					</div>
					<!-- END LOGO -->
                    
                    <div style="color:#81c223;">
                    <h1>CUSTOMER LOGIN PAGE</h1>
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
				<h3 class="pull-left">Thanks for registering</h3>
				<ul class="nav-breakcrumb  pull-right">
					<li><a href="{{URL::to('/index')}}">Home</a></li>
					<li><span> You've registered {{ $theFirstname }}.</span></li>
                    <li><a href="{{URL::to('/customer.login.register')}}">Go to login</a></li>
				</ul>

			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- LOGIN REGISTER -->
		<section class="login-register">
			<div class="container">
				<div class="row">

					<!-- LOGIN -->
					<div class="col-md-6">
					<!--{{ Form::open(array('url'=>'', 'class'=>'form login')) }}
						<div class="heading _two text-left">
							<h2>Existing Customer</h2>
						</div>
						
						<div class="form login ">
							
							<label>Email Address <sup>*</sup></label>
							{{ Form::email('loginemail', Input::old('loginemail'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'input-text')) }}
							
							
                            <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'input-text')) }}
							
							<div>
                               {{ Form::checkbox('remember', 'yes', array('class'=>'checkbox')) }}
								<label for="remember">Remember Me</label>
							</div>

							<p>
								<a href="#">Forgot your Password?</a>
							</p>

							{{ Form::submit('Log In', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
						</div>
                        {{ Form::close() }}-->

					</div>
					<!-- END LOGIN -->
					
					<!-- REGISTER -->
					<div class="col-md-6">
						<!--{{ Form::open(array('url'=>'', 'class'=>'form login')) }}
						<div class="heading _two text-left">
							<h2>Create A New Account</h2>
						</div>

						<div class="form login ">

							<label>Email Address <sup>*</sup></label>
							{{ Form::email('email', Input::old('regemail'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'input-text')) }}
							
							<label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'input-text')) }}

							<label>Confirm Password <sup>*</sup></label>
							{{ Form::password('confirm_password', array('placeholder'=>'Confirm Password','required'=>'required', 'class'=>'input-text')) }}
							<label>First Name<sup>*</sup></label>
							{{ Form::text('firstname', Input::old('firstname'), array('placeholder'=>'First Name','required'=>'required', 'class'=>'input-text')) }}
                            <label>Other Name<sup>*</sup></label>
							{{ Form::text('othername', Input::old('othername'), array('placeholder'=>'Other Name','required'=>'required', 'class'=>'input-text')) }}
                            <label>Last Name<sup>*</sup>
                            </label>
							{{ Form::text('lastname', Input::old('lastname'), array('placeholder'=>'Last Name','required'=>'required', 'class'=>'input-text')) }}
                            
                            
                            <label for="remember">
                            	I have read and accepted the 
                               {{ Form::checkbox('Accept', 'yes', array('required'=>'required', 'checked'=>'checked', 'disabled'=>'disabled',  'class'=>'checkbox')) }} <a href="">Terms of Service</a></label>
                               {{ Form::submit('Register', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}

						</div>
                        {{ Form::close() }}-->

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
						
						<div class="col-md-6 col-md-push-6 payment-icon">
							<a href="#"><img src="{{URL::asset('images/payment/icon-5.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-4.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-3.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-2.png')}}" alt=""></a>
							<a href="#"><img src="{{URL::asset('images/payment/icon-1.png')}}" alt=""></a>
						</div>

						<div class="col-md-6 col-md-pull-6 copyright">
							<p>
								&copy; 2018 <a href="http://yarth.com/" title="MegaDrupal">Young Art House</a> - All Rights Reserved.
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