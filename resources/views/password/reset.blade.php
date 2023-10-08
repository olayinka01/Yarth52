@extends('layouts.main')

@section('title')
Yarth: Password Reset
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
                    <h1>PASSWORD RESET PAGE</h1>
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
				<h3 class="pull-left">Password Reset</h3>
				<ul class="nav-breakcrumb  pull-right">
					<li><a href={{URL::to('index')}}>Home</a></li>
				</ul>

			</div>
		</section>
		<!-- END BREAKCRUMB -->
		
		<!-- REMINDER -->
		<section class="login-register">
			<div class="container">
				<div class="row">
                
                <center><label style="color:#FF0000; display:block;" class="bold">{{ HTML::ul($errors->all()) }}</label><label style="color:green; display:block;" class="bold">{{Session::get('msg')}}</label></center><br/>
					
                    <div class="col-md-3 col-sm-3"></div>
                    
                    <?php
					$token = Session::get('token');
					
					?>
                    
					<!-- PASSWORD RESET -->
					<div class="col-md-6 col-sm-6">
					{{ Form::open(array('url' => 'postReset','method' => 'post', 'class'=>'form login')) }}
						
                        
                        <div class="heading _two text-left">
							<h2>Please reset your password</h2>
						</div>
                        @if (Session::has('error'))
                        <center> <span style="color:red;font-weight:bold">{{ Session::get('error') }}</span></center>
                        @endif
						<div class="form login ">
							<p style="color:black;">Please type in your email address. We will send you a link to change the password.</p>
							
                            <div id="marginbottom20">
							{{ Form::email('email', Input::old('email'), array('placeholder'=>'Email address','required'=>'required', 'class'=>'form-control')) }}
                            </div>
                            
                            <div id="marginbottom20">
							{{ Form::password('password', array('placeholder'=>'New Password','required'=>'required', 'class'=>'form-control')) }}
							</div>
                            
							<div>
							{{ Form::password('password_confirmation', array('placeholder'=>'Confirm New Password ','required'=>'required', 'class'=>'form-control')) }}
                            
                            
                            {{ Form::hidden('token', $token) }}
							
							
						</div>
                        <footer class="pull-right">
                        {{ Form::submit('Reset', array('class'=>'btn btn-13 btn-submit')) }}
                        </footer>
                        
                        {{ Form::close() }}

					</div>
					<!-- END PASSWORD RESET -->
					
					
					<div class="col-md-3 col-sm-3"></div>

					

				</div>
			</div>
		</section>
		<!-- END REMINDER -->
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