<center><img  src="{{URL::asset('images/logo-mine.png')}}" /></center>

<h2>Hi,</h2>
 
<p style="font-size:18px;color:#799A05">We have received your Order, We will deliver to you soon...</p><br/>

<p>Order Id : {{ $order_details->order_id}}</p>
<p style="font-size:18px;color:black">Orders: <br/> 

<?php $i = 1; ?>
 @foreach($full_details as $full_detail)
		  
	<b>{{$i++ }}.	 {{ $full_detail->art_name}} by {{$full_detail->artist_name}} with customer code : </b> <br/>
		  
                               
 @endforeach




</p>
<p style="font-size:16px;color:#799A05;margin-top:10%">Thanks for using Yarth</p>