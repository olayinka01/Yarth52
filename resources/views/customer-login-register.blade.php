@extends('layouts.main')

@section('title')
Yarth: Customer Login/Register
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
				<h3 class="pull-left">Login/Register</h3>
				<ul class="nav-breakcrumb  pull-right">
					<li><a href="#">Home</a></li>
					<li><span>Login/Register</span></li>
				</ul>

			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- LOGIN REGISTER -->
		<section class="login-register">
			<div class="container">
				<div class="row">
               <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('msg')}}</label></center><br/>

					<!-- LOGIN -->
					<div class="col-md-6">
					{{ Form::open(array('url'=>'login', 'class'=>'form login')) }}
						<div class="heading _two text-left">
							<h2>Existing Customer</h2>
						</div>
                        <center> <span style="color:red;font-weight:bold">{{ Session::get('flash_error') }}</span></center>
						
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
								<span><a href={{URL::to('password/remind')}}>Forgot your Password? Click here</a></span>
							</p>

							{{ Form::submit('Log In', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
						</div>
                        {{ Form::close() }}

					</div>
					<!-- END LOGIN -->
					
					<!-- REGISTER -->
					<div class="col-md-6">
						{{ Form::open(array('url'=>'register', 'class'=>'form login')) }}
						<div class="heading _two text-left">
							<h2>Create A New Account</h2>
						</div>

						<div class="form login ">
                           <section>
							<label>First Name<sup>*</sup></label>
							{{ Form::text('firstname', Input::old('firstname'), array('placeholder'=>'First Name','required'=>'required', 'class'=>'input-text')) }}
                            </section>
                            
                            <section>
                            <label>Other Name<sup>*</sup></label>
							{{ Form::text('othername', Input::old('othername'), array('placeholder'=>'Other Name','required'=>'required', 'class'=>'input-text')) }}
                            </section>
                            
                            <section>
                            <label>Last Name<sup>*</sup></label>
							{{ Form::text('lastname', Input::old('lastname'), array('placeholder'=>'Last Name','required'=>'required', 'class'=>'input-text')) }}
                            </section>
                            
                            <section>
                            <label>Customer Name<sup>*</sup></label>
							{{ Form::text('customer_name', Input::old('customer_name'), array('placeholder'=>'Customer Name','required'=>'required', 'class'=>'input-text')) }}
                            </section>
                            
                            <section>
                            <label>Email Address <sup>*</sup></label>
							{{ Form::email('email', Input::old('email'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'input-text')) }}
                            </section>
							
							<section>
                            <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'input-text')) }}
                            </section>					
                            
                            <section>
                            <label>Confirm Password <sup>*</sup></label>
							{{ Form::password('confirm_password', array('placeholder'=>'Confirm Password','required'=>'required', 'class'=>'input-text')) }}
                            </section>
                            
                              <section>
                          <label>Gender<sup>*</sup>
                            </label>
							{{ Form::select('gender', array('unspecified'=>'Unspecified', 'male'=>'Male', 'female'=>'Female'), array('unspecified'=>'Unspecified', 'male'=>'Male', 'female'=>'Female'), array('placeholder'=>'Gender', 'required'=>'required', 'class'=>'input-text')) }}
                            </section>
                            
                            <section>
                            <label for="remember">
                            	{{ Form::checkbox('accept', 'yes', array('required'=>'required', 'checked'=>'checked', 'disabled'=>'disabled', 'class'=>'checkbox')) }} I have read and accept the 
                                <a href="">terms of service</a></label>
                                </section>
                                <!--<label class="checkbox"><input type="checkbox" name="checkbox" checked disabled required><i></i>I have read and accept the <a href="terms-conditions">Terms of Service</a></label>-->
                               {{ Form::submit('Register', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}

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