@extends('layouts.main')

@section('title')
Yarth: Admin Login
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
                    <h1>ADMIN LOGIN PAGE</h1>
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
				<h3 class="pull-left">Admin Login</h3>				
			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- LOGIN REGISTER -->
		<section class="login-register">
			<div class="container">
				<div class="row">
               <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('msg')}}</label></center><br/>

					
                    <!-- LOGIN -->
                    <div class="col-md-3"></div>
					<div class="col-md-6">
					{{ Form::open(array('url'=>'admin/login', 'class'=>'form login', 'files'=>'true')) }}
						<div class="heading _two text-left">
							<h2>Pls enter your login details here</h2>
						</div>
                        <center> <span style="color:red;font-weight:bold">{{ Session::get('flash_error') }}</span></center>
						
						<div class="form login ">
							
							<label>Username <sup>*</sup></label>
							{{ Form::text('username', Input::old('username'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'form-control')) }}
							
							
                            <label>Password <sup>*</sup></label>
							{{ Form::password('password', array('placeholder'=>'Password','required'=>'required', 'class'=>'form-control')) }}
							
							<div>
                               {{ Form::checkbox('remember', 'yes', array('class'=>'checkbox')) }}
								<label for="remember">Remember Me</label>
							</div>

							<p>
								<a href="#">Forgot your Password?</a>
							</p>

							{{ Form::submit('Log In', array('class'=>'btn btn-13 btn-submit text-uppercase')) }}
						</div>
                        {{ Form::close() }}

					</div>
                    <div class="col-md-3"></div>
                    
					<!-- END LOGIN -->
					
					
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