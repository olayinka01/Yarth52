document.getElementById("1").onclick=function(){
							
						

							
							
							var img0 = document.getElementsByClassName("img-responsive img")[0].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[0].innerHTML;
						
							  var product_id = document.getElementsByClassName("product_id")[0].innerHTML;
							 	
							   var vendor_id = document.getElementsByClassName("vendor_id")[0].innerHTML;
							  var price = document.getElementsByClassName("product_price")[0].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);
							 localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
							
							 
							
						
							
						}
						  
						document.getElementById("2").onclick=function(){
							
							
							var img0 = document.getElementsByClassName("img-responsive img")[1].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
						
							var product_name = document.getElementsByClassName("product_name")[1].innerHTML;
							  var price = document.getElementsByClassName("product_price")[1].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						}
						document.getElementById("3").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[2].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[2].innerHTML;
							  var price = document.getElementsByClassName("product_price")[2].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						document.getElementById("4").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[3].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[3].innerHTML;
							  var price = document.getElementsByClassName("product_price")[3].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						document.getElementById("5").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[4].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[4].innerHTML;
							  var price = document.getElementsByClassName("product_price")[4].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						document.getElementById("6").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[5].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[5].innerHTML;
							  var price = document.getElementsByClassName("product_price")[5].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						document.getElementById("7").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[6].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[6].innerHTML;
							  var price = document.getElementsByClassName("product_price")[6].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						document.getElementById("8").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[7].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[7].innerHTML;
							  var price = document.getElementsByClassName("product_price")[7].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						document.getElementById("9").onclick=function(){
							var img0 = document.getElementsByClassName("img-responsive img")[8].src;
							var new_img0 = img0.replace("http://localhost/NUshopa/HTML/","");
							 localStorage.setItem("img0", new_img0);
							 
							 var product_name = document.getElementsByClassName("product-name")[8].innerHTML;
							  var price = document.getElementsByClassName("product_price")[8].innerHTML;
							 localStorage.setItem("product_price", price);
							 localStorage.setItem("product_name", product_name);

localStorage.setItem("product_id", product_id);
							 
							  localStorage.setItem("vendor_id", vendor_id);
						
							
						}
						<!--adding cart to the carts-->
						document.getElementById("add0").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[0].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[0].innerHTML;
							var name = document.getElementsByClassName("cartname")[0].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[0].innerHTML;
							 addcartinfo(name,price, imag, descrip);
	
	                          location.reload(true);
					
						
							
						}
						<!--adding cart to the carts then reloading the page for reflection-->
						document.getElementById("add1").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[1].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[1].innerHTML;
							var name = document.getElementsByClassName("cartname")[1].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[1].innerHTML;
						 addcartinfo(name,price, imag, descrip);
	
	                        location.reload(true);
					
						
							
						}
						<!--adding cart to the carts then reloading the page for reflection-->
						document.getElementById("add2").onclick=function(){
							
							var imag = document.getElementsByClassName("img_path")[2].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[2].innerHTML;
							var name = document.getElementsByClassName("cartname")[2].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[2].innerHTML;
						 addcartinfo(name,price, imag, descrip);
	
                          	location.reload(true);
					
						
							
						}
						<!--adding cart to the carts then reloading the page for reflection-->
						document.getElementById("add3").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[3].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[3].innerHTML;
							var name = document.getElementsByClassName("cartname")[3].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[3].innerHTML;
						 addcartinfo(name,price, imag, descrip);
	
                          	location.reload(true);
					
						
							
						}
						//adding cart4 data to the cart
						document.getElementById("add4").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[4].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[4].innerHTML;
							var name = document.getElementsByClassName("cartname")[4].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[4].innerHTML;
						 addcartinfo(name,price, imag, descrip);
	
	                     location.reload(true);
					
							
						}
						document.getElementById("add5").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[5].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[5].innerHTML;
							var name = document.getElementsByClassName("cartname")[5].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[5].innerHTML;
					
						var descrip= document.getElementsByClassName("cartname")[6].innerHTML;
					 addcartinfo(name,price, imag, descrip);
					 location.reload(true);
							
						}
						document.getElementById("add6").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[6].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[6].innerHTML;
							var name = document.getElementsByClassName("cartname")[6].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[6].innerHTML;
					 addcartinfo(name,price, imag, descrip);
	
	                        location.reload(true);
					
						
							
						}
						document.getElementById("add7").onclick=function(){
							var imag = document.getElementsByClassName("img_path")[7].src;
							var imag=imag.replace("http://localhost:1234/deji's3/NUshopa/HTML/","");
							var price = document.getElementsByClassName("priceval")[7].innerHTML;
							var name = document.getElementsByClassName("cartname")[7].innerHTML;
							var descrip= document.getElementsByClassName("cartname")[7].innerHTML;
						 addcartinfo(name,price, imag, descrip);
	
	                    location.reload(true);
					
						
							
						}
						var img1 = document.getElementsByClassName("img-responsive img")[1].src;
						
						
function addcartinfo(carname,pprice, pimagepath,pdescription) {

// Fetch the "distances" object from the localStorage and

// either unserialize it using JSON.parse, or create a new

// array if the localStorage has no distances object.

var info = localStorage.getItem("infos");

if (!info ) { info = []; }
else { 

info = JSON.parse(info); 


}



// Add the new distance to the distances array as a

// new object, containing the distance and the current timesta
info.push({cart_name: carname, cart_price: pprice,cart_imagepath:pimagepath,cart_desc:pdescription});

// Serialize the new distances object using JSON.stringify

// and overwrite the old distances string in the localStorage.

localStorage.setItem("infos", JSON.stringify(info));

}

function $_(IDS) { return document.getElementById(IDS); }

function showcartinfo() {

var recs = JSON.parse(localStorage.getItem('infos'));

var str = ''; var ts;

if (recs != null) {

for (var i=0; i<recs.length; i++) {
str += recs[i]['cart_name'];

ts = recs[i]['cart_price'];

//alert(str);

// str += ts.toString() + '<br>';

}

} else {  }

 // localStorage.getItem('distances');

}



						
					
						
						
						
				
				