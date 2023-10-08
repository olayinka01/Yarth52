<center><img  src="{{URL::asset('images/logo-mine.png')}}" /></center>

<h2>Hi, Admin</h2>
 
<p style="font-size:18px;color:#799A05">We have received a new order  with order id : {{ $order_details->order_id}}</p><br/>
<p style="font-size:18px;color:black">Orders: <br/> <br/>

<?php $i = 1; ?>
 @foreach($full_details as $full_detail)
		  
	<b>{{$i++ }}.	Art Name :  {{ $full_detail->art_name}} by {{$full_detail->artist_name}} </b>  <br/>
		  
                               
 @endforeach




</p>
<p style="font-size:16px;color:#799A05;margin-top:10%">Thanks for using Nushopa</p>