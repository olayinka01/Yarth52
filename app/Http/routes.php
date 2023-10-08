<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('hello/', function()
{
/*	 $user=new User();
	   
	  
	   $user->admin_username="admin"; 
	   $user->password=Hash::make("password01");
	  
	   $user->account_type="2";
	   
	   $user->save();
	return view('hello');*/
});

/*App::missing(function($exception)
{
	//return Response::make(view('error404'),404);
	return Response::view('errorpage',array(),404);
});*/

/*Route::get('/', function()
{
	return view('index');
});

Route::get('/index', function()
{
	return view('index');
});
*/



Route::get('/', function()
{
	      $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  $menutype2 = DB::table('categorytype')->where('ctid','2')->get();
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();

			
			
	 		$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			 
			
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('index')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menutype2'=>$menutype2,
											   'menu1'=>$menu1,
											   'menu2'=>$menu2
											   ));
});

Route::get('/index', function()
{ 
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  $menutype2 = DB::table('categorytype')->where('ctid','2')->get();
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		  
		 

		
	 		$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	
    
											   
		return view('index')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menutype2'=>$menutype2,
											   'menu1'=>$menu1,
											   'menu2'=>$menu2
											   ));
});

											
											/* CATEGORY TYPE  */
											
Route::get('buy/artworks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORIES
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  $menucate6 = DB::table('categories')->where('cid','6')->get();

		  // GETS SUBSUBSUBCATEGORIES
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts = DB::table('arts')->where('cattype_id', '1')->orderBy(DB::raw('RAND()'))->paginate(12);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menucate2'=>$menucate2,
											   'menucate3'=>$menucate3,
											   'menucate4'=>$menucate4,
											   'menucate5'=>$menucate5,
											   'menucate6'=>$menucate6,
											   'menu1'=>$menu1
											   ));
});

													/* END CATEGORY TYPE  */

													/* CATEGORIES  */

//CATEGORY ONE
Route::get('buy/artworks/sculptures-carvings', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORIES
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  $menusubcate5 = DB::table('subcategories')->where('scid','5')->get();
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  $menusubcate7 = DB::table('subcategories')->where('scid','7')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubcate3'=>$menusubcate3,
											   'menusubcate4'=>$menusubcate4,
											   'menusubcate5'=>$menusubcate5,
											   'menusubcate6'=>$menusubcate6,
											   'menusubcate7'=>$menusubcate7,
											   'menu1'=>$menu1
											   ));
});


// CATEGORY TWO
Route::get('buy/artworks/ceramics-pottery', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate8 = DB::table('subcategories')->where('scid','8')->get();
		  $menusubcate9 = DB::table('subcategories')->where('scid','9')->get();
		  $menusubcate10 = DB::table('subcategories')->where('scid','10')->get();
		  $menusubcate11 = DB::table('subcategories')->where('scid','11')->get();
		  $menusubcate12 = DB::table('subcategories')->where('scid','12')->get();
		  $menusubcate13 = DB::table('subcategories')->where('scid','13')->get();
		  $menusubcate14 = DB::table('subcategories')->where('scid','14')->get();
		  $menusubcate15 = DB::table('subcategories')->where('scid','15')->get();
		  $menusubcate16 = DB::table('subcategories')->where('scid','16')->get();
		  $menusubcate17 = DB::table('subcategories')->where('scid','17')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate8'=>$menusubcate8,
											   'menusubcate9'=>$menusubcate9,
											   'menusubcate10'=>$menusubcate10,
											   'menusubcate11'=>$menusubcate11,
											   'menusubcate12'=>$menusubcate12,
											   'menusubcate13'=>$menusubcate13,
											   'menusubcate14'=>$menusubcate14,
											   'menusubcate15'=>$menusubcate15,
											   'menusubcate16'=>$menusubcate16,
											   'menusubcate17'=>$menusubcate17,
											   'menu1'=>$menu1
											   ));
});


// CATEGORY THREE
Route::get('buy/artworks/paintings-prints', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  $menusubcate25 = DB::table('subcategories')->where('scid','25')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubcate19'=>$menusubcate19,
											   'menusubcate20'=>$menusubcate20,
											   'menusubcate21'=>$menusubcate21,
											   'menusubcate22'=>$menusubcate22,
											   'menusubcate23'=>$menusubcate23,
											   'menusubcate24'=>$menusubcate24,
											   'menusubcate25'=>$menusubcate25,
											   'menu1'=>$menu1
											   ));
});


// CATEGORY FOUR
Route::get('buy/artworks/glass', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate26 = DB::table('subcategories')->where('scid','26')->get();
		  $menusubcate27 = DB::table('subcategories')->where('scid','27')->get();
		  $menusubcate28 = DB::table('subcategories')->where('scid','28')->get();
		  $menusubcate29 = DB::table('subcategories')->where('scid','29')->get();
		  $menusubcate30 = DB::table('subcategories')->where('scid','30')->get();
		  $menusubcate31 = DB::table('subcategories')->where('scid','31')->get();
		  $menusubcate32 = DB::table('subcategories')->where('scid','32')->get();
		  $menusubcate33 = DB::table('subcategories')->where('scid','33')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate26'=>$menusubcate26,
											   'menusubcate27'=>$menusubcate27,
											   'menusubcate28'=>$menusubcate28,
											   'menusubcate29'=>$menusubcate29,
											   'menusubcate30'=>$menusubcate30,
											   'menusubcate31'=>$menusubcate31,
											   'menusubcate32'=>$menusubcate32,
											   'menusubcate33'=>$menusubcate33,
											   'menu1'=>$menu1
											   ));
});


// CATEGORY FIVE
Route::get('buy/artworks/drawings-illustration', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  $menusubcate37 = DB::table('subcategories')->where('scid','37')->get();
		  $menusubcate38 = DB::table('subcategories')->where('scid','38')->get();
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  $menusubcate40 = DB::table('subcategories')->where('scid','40')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubcate35'=>$menusubcate35,
											   'menusubcate36'=>$menusubcate36,
											   'menusubcate37'=>$menusubcate37,
											   'menusubcate38'=>$menusubcate38,
											   'menusubcate39'=>$menusubcate39,
											   'menusubcate40'=>$menusubcate40,
											   'menu1'=>$menu1
											   ));
});


// CATEGORY SIX
Route::get('buy/artworks/crafts-otherarts', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate41 = DB::table('subcategories')->where('scid','41')->get();
		  $menusubcate42 = DB::table('subcategories')->where('scid','42')->get();
		  $menusubcate43 = DB::table('subcategories')->where('scid','43')->get();
		  $menusubcate44 = DB::table('subcategories')->where('scid','44')->get();
		  $menusubcate45 = DB::table('subcategories')->where('scid','45')->get();
		  $menusubcate46 = DB::table('subcategories')->where('scid','46')->get();
		  $menusubcate47 = DB::table('subcategories')->where('scid','47')->get();
		  $menusubcate48 = DB::table('subcategories')->where('scid','48')->get();
		  $menusubcate49 = DB::table('subcategories')->where('scid','49')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate41'=>$menusubcate41,
											   'menusubcate42'=>$menusubcate42,
											   'menusubcate43'=>$menusubcate43,
											   'menusubcate44'=>$menusubcate44,
											   'menusubcate45'=>$menusubcate45,
											   'menusubcate46'=>$menusubcate46,
											   'menusubcate47'=>$menusubcate47,
											   'menusubcate48'=>$menusubcate48,
											   'menusubcate49'=>$menusubcate49,
											   'menu1'=>$menu1
											   ));
});

											/*  END CATEGORIES  */
											
											

											/* SUB-CATEGORIES  */										
										
// SUB-CATEGORY ONE
Route::get('buy/artworks/sculptures-carvings/abstract', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate1 = DB::table('subsubcategories')->where('sscid','1')->get();
		  $menusubsubcate2 = DB::table('subsubcategories')->where('sscid','2')->get();
		  $menusubsubcate3 = DB::table('subsubcategories')->where('sscid','3')->get();
		  $menusubsubcate4 = DB::table('subsubcategories')->where('sscid','4')->get();
		  $menusubsubcate5 = DB::table('subsubcategories')->where('sscid','5')->get();
		  $menusubsubcate6 = DB::table('subsubcategories')->where('sscid','6')->get();
		  $menusubsubcate7 = DB::table('subsubcategories')->where('sscid','7')->get();
		  $menusubsubcate8 = DB::table('subsubcategories')->where('sscid','8')->get();
		  $menusubsubcate9 = DB::table('subsubcategories')->where('sscid','9')->get();
		  $menusubsubcate10 = DB::table('subsubcategories')->where('sscid','10')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate1'=>$menusubsubcate1,
											   'menusubsubcate2'=>$menusubsubcate2,
											   'menusubsubcate3'=>$menusubsubcate3,
											   'menusubsubcate4'=>$menusubsubcate4,
											   'menusubsubcate5'=>$menusubsubcate5,
											   'menusubsubcate6'=>$menusubsubcate6,
											   'menusubsubcate7'=>$menusubsubcate7,
											   'menusubsubcate8'=>$menusubsubcate8,
											   'menusubsubcate9'=>$menusubsubcate9,
											   'menusubsubcate10'=>$menusubsubcate10,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY TWO
Route::get('buy/artworks/sculptures-carvings/animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  $menusubsubcate15 = DB::table('subsubcategories')->where('sscid','15')->get();
		  $menusubsubcate16 = DB::table('subsubcategories')->where('sscid','16')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubcate15'=>$menusubsubcate15,
											   'menusubsubcate16'=>$menusubsubcate16,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY THREE
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  $menusubsubcate18 = DB::table('subsubcategories')->where('sscid','18')->get();
		  $menusubsubcate19 = DB::table('subsubcategories')->where('sscid','19')->get();
		  $menusubsubcate20 = DB::table('subsubcategories')->where('sscid','20')->get();
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  $menusubsubcate22 = DB::table('subsubcategories')->where('sscid','22')->get();
		  $menusubsubcate23 = DB::table('subsubcategories')->where('sscid','23')->get();
		  $menusubsubcate24 = DB::table('subsubcategories')->where('sscid','24')->get();
		  $menusubsubcate25 = DB::table('subsubcategories')->where('sscid','25')->get();
		  $menusubsubcate26 = DB::table('subsubcategories')->where('sscid','26')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubcate18'=>$menusubsubcate18,
											   'menusubsubcate19'=>$menusubsubcate19,
											   'menusubsubcate20'=>$menusubsubcate20,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubcate22'=>$menusubsubcate22,
											   'menusubsubcate23'=>$menusubsubcate23,
											   'menusubsubcate24'=>$menusubsubcate24,
											   'menusubsubcate25'=>$menusubsubcate25,
											   'menusubsubcate26'=>$menusubsubcate26,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY FOUR
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  $menusubsubcate28 = DB::table('subsubcategories')->where('sscid','28')->get();
		  $menusubsubcate29 = DB::table('subsubcategories')->where('sscid','29')->get();
		  $menusubsubcate30 = DB::table('subsubcategories')->where('sscid','30')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubcate28'=>$menusubsubcate28,
											   'menusubsubcate29'=>$menusubsubcate29,
											   'menusubsubcate30'=>$menusubsubcate30,
											   'menu1'=>$menu1
											   ));
});



// SUB-CATEGORY FIVE
Route::get('buy/artworks/sculptures-carvings/fountains-waterfalls', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate5 = DB::table('subcategories')->where('scid','5')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		 
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '5')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/fountains-waterfalls')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate5'=>$menusubcate5,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY SIX
Route::get('buy/artworks/sculptures-carvings/science-technology', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate31 = DB::table('subsubcategories')->where('sscid','31')->get();
		  $menusubsubcate32 = DB::table('subsubcategories')->where('sscid','32')->get();
		  $menusubsubcate33 = DB::table('subsubcategories')->where('sscid','33')->get();
		  $menusubsubcate34 = DB::table('subsubcategories')->where('sscid','34')->get();
		  $menusubsubcate35 = DB::table('subsubcategories')->where('sscid','35')->get();
		  $menusubsubcate36 = DB::table('subsubcategories')->where('sscid','36')->get();
		  $menusubsubcate37 = DB::table('subsubcategories')->where('sscid','37')->get();

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate31'=>$menusubsubcate31,
											   'menusubsubcate32'=>$menusubsubcate32,
											   'menusubsubcate33'=>$menusubsubcate33,
											   'menusubsubcate34'=>$menusubsubcate34,
											   'menusubsubcate35'=>$menusubsubcate35,
											   'menusubsubcate36'=>$menusubsubcate36,
											   'menusubsubcate37'=>$menusubsubcate37,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY SEVEN
Route::get('buy/artworks/sculptures-carvings/other-sculptures-carvings', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate7 = DB::table('subcategories')->where('scid','7')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '7')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/other-sculptures-carvings')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate7'=>$menusubcate7,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY EIGHT
Route::get('buy/artworks/ceramics-pottery/bowls-pots', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate8 = DB::table('subcategories')->where('scid','8')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '8')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/bowls-pots')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate8'=>$menusubcate8,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY NINE
Route::get('buy/artworks/ceramics-pottery/candle-holders', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate9 = DB::table('subcategories')->where('scid','9')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '9')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/candle-holders')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate9'=>$menusubcate9,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY TEN
Route::get('buy/artworks/ceramics-pottery/childrens-art', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate10 = DB::table('subcategories')->where('scid','10')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '10')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/childrens-art')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate10'=>$menusubcate10,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY ELEVEN
Route::get('buy/artworks/ceramics-pottery/cups-goblets', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate11 = DB::table('subcategories')->where('scid','11')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '11')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/cups-goblets')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate11'=>$menusubcate11,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY TWELVE
Route::get('buy/artworks/ceramics-pottery/fountains-waterfalls', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate12 = DB::table('subcategories')->where('scid','12')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '12')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/fountains-waterfalls')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate12'=>$menusubcate12,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 13
Route::get('buy/artworks/ceramics-pottery/jars', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate13 = DB::table('subcategories')->where('scid','13')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '13')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/jars')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate13'=>$menusubcate13,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 14
Route::get('buy/artworks/ceramics-pottery/jewelry', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate14 = DB::table('subcategories')->where('scid','14')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '14')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/jewelry')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate14'=>$menusubcate14,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 15
Route::get('buy/artworks/ceramics-pottery/tiles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate15 = DB::table('subcategories')->where('scid','15')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '15')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/tiles')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate15'=>$menusubcate15,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 16
Route::get('buy/artworks/ceramics-pottery/vases-urns', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate16 = DB::table('subcategories')->where('scid','16')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '16')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/vases-urns')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate16'=>$menusubcate16,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 17
Route::get('buy/artworks/ceramics-pottery/other-ceramics-pottery', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate17 = DB::table('subcategories')->where('scid','17')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '2')->where('subcat_id', '17')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/ceramics-pottery/other-ceramics-pottery')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate2'=>$menucate2,
											   'menusubcate17'=>$menusubcate17,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 18
Route::get('buy/artworks/paintings-prints/abstract', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate38 = DB::table('subsubcategories')->where('sscid','38')->get();
		  $menusubsubcate39 = DB::table('subsubcategories')->where('sscid','39')->get();
		  $menusubsubcate40 = DB::table('subsubcategories')->where('sscid','40')->get();
		  $menusubsubcate41 = DB::table('subsubcategories')->where('sscid','41')->get();
		  $menusubsubcate42 = DB::table('subsubcategories')->where('sscid','42')->get();
		  $menusubsubcate43 = DB::table('subsubcategories')->where('sscid','43')->get();
		  $menusubsubcate44 = DB::table('subsubcategories')->where('sscid','44')->get();
		  $menusubsubcate45 = DB::table('subsubcategories')->where('sscid','45')->get();
		  $menusubsubcate46 = DB::table('subsubcategories')->where('sscid','46')->get();
		  $menusubsubcate47 = DB::table('subsubcategories')->where('sscid','47')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate38'=>$menusubsubcate38,
											   'menusubsubcate39'=>$menusubsubcate39,
											   'menusubsubcate40'=>$menusubsubcate40,
											   'menusubsubcate41'=>$menusubsubcate41,
											   'menusubsubcate42'=>$menusubsubcate42,
											   'menusubsubcate43'=>$menusubsubcate43,
											   'menusubsubcate44'=>$menusubsubcate44,
											   'menusubsubcate45'=>$menusubsubcate45,
											   'menusubsubcate46'=>$menusubsubcate46,
											   'menusubsubcate47'=>$menusubsubcate47,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 19
Route::get('buy/artworks/paintings-prints/animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  $menusubsubcate52 = DB::table('subsubcategories')->where('sscid','52')->get();
		  $menusubsubcate53 = DB::table('subsubcategories')->where('sscid','53')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubcate52'=>$menusubsubcate52,
											   'menusubsubcate53'=>$menusubsubcate53,
											   'menu1'=>$menu1
											   ));
});



// SUB-CATEGORY 20
Route::get('buy/artworks/paintings-prints/flowers-plants-trees', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  $menusubsubcate55 = DB::table('subsubcategories')->where('sscid','55')->get();
		  $menusubsubcate56 = DB::table('subsubcategories')->where('sscid','56')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubcate55'=>$menusubsubcate55,
											   'menusubsubcate56'=>$menusubsubcate56,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 21
Route::get('buy/artworks/paintings-prints/people-figures', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate57 = DB::table('subsubcategories')->where('sscid','57')->get();
		  $menusubsubcate58 = DB::table('subsubcategories')->where('sscid','58')->get();
		  $menusubsubcate59 = DB::table('subsubcategories')->where('sscid','59')->get();
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  $menusubsubcate61 = DB::table('subsubcategories')->where('sscid','61')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate57'=>$menusubsubcate57,
											   'menusubsubcate58'=>$menusubsubcate58,
											   'menusubsubcate59'=>$menusubsubcate59,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubcate61'=>$menusubsubcate61,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 22
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  $menusubsubcate63 = DB::table('subsubcategories')->where('sscid','63')->get();
		  $menusubsubcate64 = DB::table('subsubcategories')->where('sscid','64')->get();
		  $menusubsubcate65 = DB::table('subsubcategories')->where('sscid','65')->get();
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  $menusubsubcate67 = DB::table('subsubcategories')->where('sscid','67')->get();
		  $menusubsubcate68 = DB::table('subsubcategories')->where('sscid','68')->get();
		  $menusubsubcate69 = DB::table('subsubcategories')->where('sscid','69')->get();
		  $menusubsubcate70 = DB::table('subsubcategories')->where('sscid','70')->get();
		  $menusubsubcate71 = DB::table('subsubcategories')->where('sscid','71')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubcate63'=>$menusubsubcate63,
											   'menusubsubcate64'=>$menusubsubcate64,
											   'menusubsubcate65'=>$menusubsubcate65,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubcate67'=>$menusubsubcate67,
											   'menusubsubcate68'=>$menusubsubcate68,
											   'menusubsubcate69'=>$menusubsubcate69,
											   'menusubsubcate70'=>$menusubsubcate70,
											   'menusubsubcate71'=>$menusubsubcate71,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 23
Route::get('buy/artworks/paintings-prints/science-technology', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate72 = DB::table('subsubcategories')->where('sscid','72')->get();
		  $menusubsubcate73 = DB::table('subsubcategories')->where('sscid','73')->get();
		  $menusubsubcate74 = DB::table('subsubcategories')->where('sscid','74')->get();
		  $menusubsubcate75 = DB::table('subsubcategories')->where('sscid','75')->get();
		  $menusubsubcate76 = DB::table('subsubcategories')->where('sscid','76')->get();
		  $menusubsubcate77 = DB::table('subsubcategories')->where('sscid','77')->get();
		  $menusubsubcate78 = DB::table('subsubcategories')->where('sscid','78')->get();
		  $menusubsubcate79 = DB::table('subsubcategories')->where('sscid','79')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate72'=>$menusubsubcate72,
											   'menusubsubcate73'=>$menusubsubcate73,
											   'menusubsubcate74'=>$menusubsubcate74,
											   'menusubsubcate75'=>$menusubsubcate75,
											   'menusubsubcate76'=>$menusubsubcate76,
											   'menusubsubcate77'=>$menusubsubcate77,
											   'menusubsubcate78'=>$menusubsubcate78,
											   'menusubsubcate79'=>$menusubsubcate79,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 24
Route::get('buy/artworks/paintings-prints/politics-patriotism', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate80 = DB::table('subsubcategories')->where('sscid','80')->get();
		  $menusubsubcate81 = DB::table('subsubcategories')->where('sscid','81')->get();
		  $menusubsubcate82 = DB::table('subsubcategories')->where('sscid','82')->get();
		  $menusubsubcate83 = DB::table('subsubcategories')->where('sscid','83')->get();
		  $menusubsubcate84 = DB::table('subsubcategories')->where('sscid','84')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '24')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/politics-patriotism')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate24'=>$menusubcate24,
											   'menusubsubcate80'=>$menusubsubcate80,
											   'menusubsubcate81'=>$menusubsubcate81,
											   'menusubsubcate82'=>$menusubsubcate82,
											   'menusubsubcate83'=>$menusubsubcate83,
											   'menusubsubcate84'=>$menusubsubcate84,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 25
Route::get('buy/artworks/paintings-prints/other-paintings-prints', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate25 = DB::table('subcategories')->where('scid','25')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '25')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/other-paintings-prints')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate25'=>$menusubcate25,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 26
Route::get('buy/artworks/glass/bead', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate26 = DB::table('subcategories')->where('scid','26')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '26')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/bead')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate26'=>$menusubcate26,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 27
Route::get('buy/artworks/glass/bowls-pots', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate27 = DB::table('subcategories')->where('scid','27')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '27')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/bowls-pots')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate27'=>$menusubcate27,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 28
Route::get('buy/artworks/glass/candle-holders', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate28 = DB::table('subcategories')->where('scid','28')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '28')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/candle-holders')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate28'=>$menusubcate28,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 29
Route::get('buy/artworks/glass/jars', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate29 = DB::table('subcategories')->where('scid','29')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '29')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/jars')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate29'=>$menusubcate29,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 30
Route::get('buy/artworks/glass/jewelry', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate30 = DB::table('subcategories')->where('scid','30')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '30')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/jewelry')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate30'=>$menusubcate30,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 31
Route::get('buy/artworks/glass/mirrors', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate31 = DB::table('subcategories')->where('scid','31')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '31')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/mirrors')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate31'=>$menusubcate31,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 32
Route::get('buy/artworks/glass/vases-urns', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate32 = DB::table('subcategories')->where('scid','32')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '32')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/vases-urns')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate32'=>$menusubcate32,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 33
Route::get('buy/artworks/glass/other-glass', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate33 = DB::table('subcategories')->where('scid','33')->get();
		  
		  // NO SUB-SUB-CATEGORIES
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '4')->where('subcat_id', '33')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/glass/other-glass')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate4'=>$menucate4,
											   'menusubcate33'=>$menusubcate33,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 34
Route::get('buy/artworks/drawings-illustration/abstract', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate85 = DB::table('subsubcategories')->where('sscid','85')->get();
		  $menusubsubcate86 = DB::table('subsubcategories')->where('sscid','86')->get();
		  $menusubsubcate87 = DB::table('subsubcategories')->where('sscid','87')->get();
		  $menusubsubcate88 = DB::table('subsubcategories')->where('sscid','88')->get();
		  $menusubsubcate89 = DB::table('subsubcategories')->where('sscid','89')->get();
		  $menusubsubcate90 = DB::table('subsubcategories')->where('sscid','90')->get();
		  $menusubsubcate91 = DB::table('subsubcategories')->where('sscid','91')->get();
		  $menusubsubcate92 = DB::table('subsubcategories')->where('sscid','92')->get();
		  $menusubsubcate93 = DB::table('subsubcategories')->where('sscid','93')->get();
		  $menusubsubcate94 = DB::table('subsubcategories')->where('sscid','94')->get();
		  $menusubsubcate95 = DB::table('subsubcategories')->where('sscid','95')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate85'=>$menusubsubcate85,
											   'menusubsubcate86'=>$menusubsubcate86,
											   'menusubsubcate87'=>$menusubsubcate87,
											   'menusubsubcate88'=>$menusubsubcate88,
											   'menusubsubcate89'=>$menusubsubcate89,
											   'menusubsubcate90'=>$menusubsubcate90,
											   'menusubsubcate91'=>$menusubsubcate91,
											   'menusubsubcate92'=>$menusubsubcate92,
											   'menusubsubcate93'=>$menusubsubcate93,
											   'menusubsubcate94'=>$menusubsubcate94,
											   'menusubsubcate95'=>$menusubsubcate95,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 35
Route::get('buy/artworks/drawings-illustration/animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  $menusubsubcate100 = DB::table('subsubcategories')->where('sscid','100')->get();
		  $menusubsubcate101= DB::table('subsubcategories')->where('sscid','101')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubcate100'=>$menusubsubcate100,
											   'menusubsubcate101'=>$menusubsubcate101,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 36
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  $menusubsubcate103 = DB::table('subsubcategories')->where('sscid','103')->get();
		  $menusubsubcate104 = DB::table('subsubcategories')->where('sscid','104')->get();
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  $menusubsubcate106 = DB::table('subsubcategories')->where('sscid','106')->get();
		  $menusubsubcate107 = DB::table('subsubcategories')->where('sscid','107')->get();
		  $menusubsubcate108 = DB::table('subsubcategories')->where('sscid','108')->get();
		  $menusubsubcate109 = DB::table('subsubcategories')->where('sscid','109')->get();
		  $menusubsubcate110 = DB::table('subsubcategories')->where('sscid','110')->get();
		  $menusubsubcate123 = DB::table('subsubcategories')->where('sscid','123')->get();
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubcate103'=>$menusubsubcate103,
											   'menusubsubcate104'=>$menusubsubcate104,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubcate106'=>$menusubsubcate106,
											   'menusubsubcate107'=>$menusubsubcate107,
											   'menusubsubcate108'=>$menusubsubcate108,
											   'menusubsubcate109'=>$menusubsubcate109,
											   'menusubsubcate110'=>$menusubsubcate110,
											   'menusubsubcate123'=>$menusubsubcate123,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 37
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','37')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  $menusubsubcate112 = DB::table('subsubcategories')->where('sscid','112')->get();
		  $menusubsubcate113 = DB::table('subsubcategories')->where('sscid','113')->get();
		  $menusubsubcate114 = DB::table('subsubcategories')->where('sscid','114')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubcate112'=>$menusubsubcate112,
											   'menusubsubcate113'=>$menusubsubcate113,
											   'menusubsubcate114'=>$menusubsubcate114,
											   'menu1'=>$menu1
											   ));
});



// SUB-CATEGORY 38
Route::get('buy/artworks/drawings-illustration/fountains-waterfalls', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate38 = DB::table('subcategories')->where('scid','38')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '38')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/fountains-waterfalls')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate38'=>$menusubcate38,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 39
Route::get('buy/artworks/drawings-illustration/science-technology', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubcate115 = DB::table('subsubcategories')->where('sscid','115')->get();
		  $menusubsubcate116 = DB::table('subsubcategories')->where('sscid','116')->get();
		  $menusubsubcate117 = DB::table('subsubcategories')->where('sscid','117')->get();
		  $menusubsubcate118 = DB::table('subsubcategories')->where('sscid','118')->get();
		  $menusubsubcate119 = DB::table('subsubcategories')->where('sscid','119')->get();
		  $menusubsubcate120 = DB::table('subsubcategories')->where('sscid','120')->get();
		  $menusubsubcate121 = DB::table('subsubcategories')->where('sscid','121')->get();
		  $menusubsubcate122 = DB::table('subsubcategories')->where('sscid','122')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate115'=>$menusubsubcate115,
											   'menusubsubcate116'=>$menusubsubcate116,
											   'menusubsubcate117'=>$menusubsubcate117,
											   'menusubsubcate118'=>$menusubsubcate118,
											   'menusubsubcate119'=>$menusubsubcate119,
											   'menusubsubcate120'=>$menusubsubcate120,
											   'menusubsubcate121'=>$menusubsubcate121,
											   'menusubsubcate122'=>$menusubsubcate122,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 40
Route::get('buy/artworks/drawings-illustration/other-drawings-illustration', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate40 = DB::table('subcategories')->where('scid','40')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '40')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/other-drawings-illustration')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate40'=>$menusubcate40,
											   'menu1'=>$menu1
											   ));
});

// SUB-CATEGORY 41
Route::get('buy/artworks/crafts-otherarts/basketry', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate41 = DB::table('subcategories')->where('scid','41')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '41')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/basketry')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate41'=>$menusubcate41,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 41
Route::get('buy/artworks/crafts-otherarts/beadwork', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate42 = DB::table('subcategories')->where('scid','42')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '42')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/beadwork')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate42'=>$menusubcate42,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 43
Route::get('buy/artworks/crafts-otherarts/birdhouses-birdcages', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate43 = DB::table('subcategories')->where('scid','43')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '43')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/birdhouses-birdcages')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate43'=>$menusubcate43,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 44
Route::get('buy/artworks/crafts-otherarts/birdfeeders', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate44 = DB::table('subcategories')->where('scid','44')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '44')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/birdfeeders')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate44'=>$menusubcate44,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 45
Route::get('buy/artworks/crafts-otherarts/boxes', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate45 = DB::table('subcategories')->where('scid','45')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '45')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/boxes')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate45'=>$menusubcate45,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 46
Route::get('buy/artworks/crafts-otherarts/candles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate46 = DB::table('subcategories')->where('scid','46')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '46')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/candles')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate46'=>$menusubcate46,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 47
Route::get('buy/artworks/crafts-otherarts/leathercraft', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate47 = DB::table('subcategories')->where('scid','47')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '47')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/leathercraft')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate47'=>$menusubcate47,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 48
Route::get('buy/artworks/crafts-otherarts/toys', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate48 = DB::table('subcategories')->where('scid','48')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '48')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/toys')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate48'=>$menusubcate48,
											   'menu1'=>$menu1
											   ));
});


// SUB-CATEGORY 49
Route::get('buy/artworks/crafts-otherarts/other-craft-arts', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate49 = DB::table('subcategories')->where('scid','49')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '6')->where('subcat_id', '49')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/crafts-otherarts/other-craft-arts')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate6'=>$menucate6,
											   'menusubcate49'=>$menusubcate49,
											   'menu1'=>$menu1
											   ));
});

											/* END SUB-CATEGORIES  */
											
											
											
											/*  SUB-SUB-CATEGORIES  */

// SUB-SUB-CATEGORY 1
Route::get('buy/artworks/sculptures-carvings/abstract/collage', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate1 = DB::table('subsubcategories')->where('sscid','1')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '1')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/collage')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate1'=>$menusubsubcate1,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 2
Route::get('buy/artworks/sculptures-carvings/abstract/colour', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate2 = DB::table('subsubcategories')->where('sscid','2')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '2')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/colour')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate2'=>$menusubsubcate2,
											   'menu1'=>$menu1
											   ));
});						
											

// SUB-SUB-CATEGORY 3
Route::get('buy/artworks/sculptures-carvings/abstract/figurative', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate3 = DB::table('subsubcategories')->where('sscid','3')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '3')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/figurative')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate3'=>$menusubsubcate3,
											   'menu1'=>$menu1
											   ));
});						


// SUB-SUB-CATEGORY 4
Route::get('buy/artworks/sculptures-carvings/abstract/geometric', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate4 = DB::table('subsubcategories')->where('sscid','4')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '4')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/geometric')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate4'=>$menusubsubcate4,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 5
Route::get('buy/artworks/sculptures-carvings/abstract/irregular-forms', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate5 = DB::table('subsubcategories')->where('sscid','5')->get();
		  
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '5')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/irregular-forms')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate5'=>$menusubsubcate5,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 6
Route::get('buy/artworks/sculptures-carvings/abstract/landscape', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate6 = DB::table('subsubcategories')->where('sscid','6')->get();
		  
		  

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '6')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/landscape')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate6'=>$menusubsubcate6,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 7
Route::get('buy/artworks/sculptures-carvings/abstract/man-made-objects', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate7 = DB::table('subsubcategories')->where('sscid','7')->get();
		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '7')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/man-made-objects')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate7'=>$menusubsubcate7,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 8
Route::get('buy/artworks/sculptures-carvings/abstract/text', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate8 = DB::table('subsubcategories')->where('sscid','8')->get();
		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '8')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/text')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate8'=>$menusubsubcate8,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 9
Route::get('buy/artworks/sculptures-carvings/abstract/organic', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate9 = DB::table('subsubcategories')->where('sscid','9')->get();
		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '9')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/organic')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate9'=>$menusubsubcate9,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 10
Route::get('buy/artworks/sculptures-carvings/abstract/other-abstract', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate1 = DB::table('subcategories')->where('scid','1')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate10 = DB::table('subsubcategories')->where('sscid','10')->get();
		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '1')->where('subsubcat_id', '10')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/abstract/other-abstract')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate1'=>$menusubcate1,
											   'menusubsubcate10'=>$menusubsubcate10,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 11
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate1 = DB::table('subsubsubcategories')->where('ssscid','1')->get();
		  $menusubsubsubcate2 = DB::table('subsubsubcategories')->where('ssscid','2')->get();
		  $menusubsubsubcate3 = DB::table('subsubsubcategories')->where('ssscid','3')->get();
		  $menusubsubsubcate4 = DB::table('subsubsubcategories')->where('ssscid','4')->get();
		  $menusubsubsubcate5 = DB::table('subsubsubcategories')->where('ssscid','5')->get();
		  $menusubsubsubcate6 = DB::table('subsubsubcategories')->where('ssscid','6')->get();
		  
		  
		  
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate1'=>$menusubsubsubcate1,
											   'menusubsubsubcate2'=>$menusubsubsubcate2,
											   'menusubsubsubcate3'=>$menusubsubsubcate3,
											   'menusubsubsubcate4'=>$menusubsubsubcate4,
											   'menusubsubsubcate5'=>$menusubsubsubcate5,
											   'menusubsubsubcate6'=>$menusubsubsubcate6,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 12
Route::get('buy/artworks/sculptures-carvings/animals/birds', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate7 = DB::table('subsubsubcategories')->where('ssscid','7')->get();
		  $menusubsubsubcate8 = DB::table('subsubsubcategories')->where('ssscid','8')->get();
		  $menusubsubsubcate9 = DB::table('subsubsubcategories')->where('ssscid','9')->get();
		  $menusubsubsubcate10 = DB::table('subsubsubcategories')->where('ssscid','10')->get();
		  $menusubsubsubcate11 = DB::table('subsubsubcategories')->where('ssscid','11')->get();
		  $menusubsubsubcate12 = DB::table('subsubsubcategories')->where('ssscid','12')->get();
		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate7'=>$menusubsubsubcate7,
											   'menusubsubsubcate8'=>$menusubsubsubcate8,
											   'menusubsubsubcate9'=>$menusubsubsubcate9,
											   'menusubsubsubcate10'=>$menusubsubsubcate10,
											   'menusubsubsubcate11'=>$menusubsubsubcate11,
											   'menusubsubsubcate12'=>$menusubsubsubcate12,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 13
Route::get('buy/artworks/sculptures-carvings/animals/insect-bugs', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate13 = DB::table('subsubsubcategories')->where('ssscid','13')->get();
		  $menusubsubsubcate14 = DB::table('subsubsubcategories')->where('ssscid','14')->get();
		  $menusubsubsubcate15 = DB::table('subsubsubcategories')->where('ssscid','15')->get();
		  $menusubsubsubcate16 = DB::table('subsubsubcategories')->where('ssscid','16')->get();
		  $menusubsubsubcate17 = DB::table('subsubsubcategories')->where('ssscid','17')->get();		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '13')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/insect-bugs')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubsubcate13'=>$menusubsubsubcate13,
											   'menusubsubsubcate14'=>$menusubsubsubcate14,
											   'menusubsubsubcate15'=>$menusubsubsubcate15,
											   'menusubsubsubcate16'=>$menusubsubsubcate16,
											   'menusubsubsubcate17'=>$menusubsubsubcate17,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 14
Route::get('buy/artworks/sculptures-carvings/animals/dogs-puppies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate18 = DB::table('subsubsubcategories')->where('ssscid','18')->get();
		  $menusubsubsubcate19 = DB::table('subsubsubcategories')->where('ssscid','19')->get();
		  $menusubsubsubcate20 = DB::table('subsubsubcategories')->where('ssscid','20')->get();
		  $menusubsubsubcate21 = DB::table('subsubsubcategories')->where('ssscid','21')->get();
		  $menusubsubsubcate22 = DB::table('subsubsubcategories')->where('ssscid','22')->get();	

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '14')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/dogs-puppies')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubsubcate18'=>$menusubsubsubcate18,
											   'menusubsubsubcate19'=>$menusubsubsubcate19,
											   'menusubsubsubcate20'=>$menusubsubsubcate20,
											   'menusubsubsubcate21'=>$menusubsubsubcate21,
											   'menusubsubsubcate22'=>$menusubsubsubcate22,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 15
Route::get('buy/artworks/sculptures-carvings/animals/farm-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate15 = DB::table('subsubcategories')->where('sscid','15')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate23 = DB::table('subsubsubcategories')->where('ssscid','23')->get();
		  $menusubsubsubcate24 = DB::table('subsubsubcategories')->where('ssscid','24')->get();
		  $menusubsubsubcate25 = DB::table('subsubsubcategories')->where('ssscid','25')->get();
		  $menusubsubsubcate26 = DB::table('subsubsubcategories')->where('ssscid','26')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '15')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/farm-animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate15'=>$menusubsubcate15,
											   'menusubsubsubcate23'=>$menusubsubsubcate23,
											   'menusubsubsubcate24'=>$menusubsubsubcate24,
											   'menusubsubsubcate25'=>$menusubsubsubcate25,
											   'menusubsubsubcate26'=>$menusubsubsubcate26,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 16
Route::get('buy/artworks/sculptures-carvings/animals/other-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate16 = DB::table('subsubcategories')->where('sscid','16')->get();
		  
		 

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '16')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/other-animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate16'=>$menusubsubcate16,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 17
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate27 = DB::table('subsubsubcategories')->where('ssscid','27')->get();
		  $menusubsubsubcate28 = DB::table('subsubsubcategories')->where('ssscid','28')->get();
		  $menusubsubsubcate29 = DB::table('subsubsubcategories')->where('ssscid','29')->get();
		  $menusubsubsubcate30 = DB::table('subsubsubcategories')->where('ssscid','30')->get();
		  $menusubsubsubcate31 = DB::table('subsubsubcategories')->where('ssscid','31')->get();
		  $menusubsubsubcate32 = DB::table('subsubsubcategories')->where('ssscid','32')->get();
		  $menusubsubsubcate33 = DB::table('subsubsubcategories')->where('ssscid','33')->get();
		  $menusubsubsubcate34 = DB::table('subsubsubcategories')->where('ssscid','34')->get();
		  $menusubsubsubcate35 = DB::table('subsubsubcategories')->where('ssscid','35')->get();	

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate27'=>$menusubsubsubcate27,
											   'menusubsubsubcate28'=>$menusubsubsubcate28,
											   'menusubsubsubcate29'=>$menusubsubsubcate29,
											   'menusubsubsubcate30'=>$menusubsubsubcate30,
											   'menusubsubsubcate31'=>$menusubsubsubcate31,
											   'menusubsubsubcate32'=>$menusubsubsubcate32,
											   'menusubsubsubcate33'=>$menusubsubsubcate33,
											   'menusubsubsubcate34'=>$menusubsubsubcate34,
											   'menusubsubsubcate35'=>$menusubsubsubcate35,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 18
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate18 = DB::table('subsubcategories')->where('sscid','18')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate36 = DB::table('subsubsubcategories')->where('ssscid','36')->get();
		  $menusubsubsubcate37 = DB::table('subsubsubcategories')->where('ssscid','37')->get();
		  $menusubsubsubcate38 = DB::table('subsubsubcategories')->where('ssscid','38')->get();
		  $menusubsubsubcate39 = DB::table('subsubsubcategories')->where('ssscid','39')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '18')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate18'=>$menusubsubcate18,
											   'menusubsubsubcate36'=>$menusubsubsubcate36,
											   'menusubsubsubcate37'=>$menusubsubsubcate37,
											   'menusubsubsubcate38'=>$menusubsubsubcate38,
											   'menusubsubsubcate39'=>$menusubsubsubcate39,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 19
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/british', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate19 = DB::table('subsubcategories')->where('sscid','19')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '19')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/british')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate19'=>$menusubsubcate19,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 20
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/americana', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate20 = DB::table('subsubcategories')->where('sscid','20')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '20')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/americana')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate20'=>$menusubsubcate20,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 21
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate40 = DB::table('subsubsubcategories')->where('ssscid','40')->get();
		  $menusubsubsubcate41 = DB::table('subsubsubcategories')->where('ssscid','41')->get();
		  $menusubsubsubcate42 = DB::table('subsubsubcategories')->where('ssscid','42')->get();
		  $menusubsubsubcate43 = DB::table('subsubsubcategories')->where('ssscid','43')->get();
		  $menusubsubsubcate44 = DB::table('subsubsubcategories')->where('ssscid','44')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '21')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubsubcate40'=>$menusubsubsubcate40,
											   'menusubsubsubcate41'=>$menusubsubsubcate41,
											   'menusubsubsubcate42'=>$menusubsubsubcate42,
											   'menusubsubsubcate43'=>$menusubsubsubcate43,
											   'menusubsubsubcate44'=>$menusubsubsubcate44,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 22
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/egyptian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate22 = DB::table('subsubcategories')->where('sscid','22')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '22')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/egyptian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate22'=>$menusubsubcate22,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 23
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/italian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate23 = DB::table('subsubcategories')->where('sscid','23')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '23')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/italian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate23'=>$menusubsubcate23,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 24
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/mexican', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate24 = DB::table('subsubcategories')->where('sscid','24')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '24')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/mexican')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate24'=>$menusubsubcate24,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 25
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/russian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate25 = DB::table('subsubcategories')->where('sscid','25')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '25')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/russian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate25'=>$menusubsubcate25,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 26
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate26 = DB::table('subsubcategories')->where('sscid','26')->get();
		  
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '26')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/others')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate26'=>$menusubsubcate26,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 27
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate45 = DB::table('subsubsubcategories')->where('ssscid','45')->get();
		  $menusubsubsubcate46 = DB::table('subsubsubcategories')->where('ssscid','46')->get();
		  $menusubsubsubcate47 = DB::table('subsubsubcategories')->where('ssscid','47')->get();
		  $menusubsubsubcate48 = DB::table('subsubsubcategories')->where('ssscid','48')->get();
		  $menusubsubsubcate49 = DB::table('subsubsubcategories')->where('ssscid','49')->get();
		  $menusubsubsubcate50 = DB::table('subsubsubcategories')->where('ssscid','50')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate45'=>$menusubsubsubcate45,
											   'menusubsubsubcate46'=>$menusubsubsubcate46,
											   'menusubsubsubcate47'=>$menusubsubsubcate47,
											   'menusubsubsubcate48'=>$menusubsubsubcate48,
											   'menusubsubsubcate49'=>$menusubsubsubcate49,
											   'menusubsubsubcate50'=>$menusubsubsubcate50,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 28
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/plants', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate28 = DB::table('subsubcategories')->where('sscid','28')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate51 = DB::table('subsubsubcategories')->where('ssscid','51')->get();
		  $menusubsubsubcate52 = DB::table('subsubsubcategories')->where('ssscid','52')->get();
		  $menusubsubsubcate53 = DB::table('subsubsubcategories')->where('ssscid','53')->get();
		  $menusubsubsubcate54 = DB::table('subsubsubcategories')->where('ssscid','54')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '28')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/plants')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate28'=>$menusubsubcate28,
											   'menusubsubsubcate51'=>$menusubsubsubcate51,
											   'menusubsubsubcate52'=>$menusubsubsubcate52,
											   'menusubsubsubcate53'=>$menusubsubsubcate53,
											   'menusubsubsubcate54'=>$menusubsubsubcate54,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 29
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/trees', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate29 = DB::table('subsubcategories')->where('sscid','29')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '29')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/trees')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate29'=>$menusubsubcate29,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 30
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate30 = DB::table('subsubcategories')->where('sscid','30')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '30')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/others')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate30'=>$menusubsubcate30,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 31
Route::get('buy/artworks/sculptures-carvings/science-technology/ecology', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate31 = DB::table('subsubcategories')->where('sscid','31')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '31')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/ecology')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate31'=>$menusubsubcate31,
											   'menu1'=>$menu1
											   ));
});

// SUB-SUB-CATEGORY 32
Route::get('buy/artworks/sculptures-carvings/science-technology/space', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate32 = DB::table('subsubcategories')->where('sscid','32')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '32')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/space')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate32'=>$menusubsubcate32,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 33
Route::get('buy/artworks/sculptures-carvings/science-technology/history', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate33 = DB::table('subsubcategories')->where('sscid','33')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '33')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/history')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate33'=>$menusubsubcate33,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 34
Route::get('buy/artworks/sculptures-carvings/science-technology/medicine', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate34 = DB::table('subsubcategories')->where('sscid','34')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '34')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/medicine')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate34'=>$menusubsubcate34,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 35
Route::get('buy/artworks/sculptures-carvings/science-technology/people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate35 = DB::table('subsubcategories')->where('sscid','35')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '35')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/people')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate35'=>$menusubsubcate35,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 36
Route::get('buy/artworks/sculptures-carvings/science-technology/research', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate36 = DB::table('subsubcategories')->where('sscid','36')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '36')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/research')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate36'=>$menusubsubcate36,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 37
Route::get('buy/artworks/sculptures-carvings/science-technology/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate6 = DB::table('subcategories')->where('scid','6')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate37 = DB::table('subsubcategories')->where('sscid','37')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '6')->where('subsubcat_id', '37')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/science-technology/others')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate6'=>$menusubcate6,
											   'menusubsubcate37'=>$menusubsubcate37,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 38
Route::get('buy/artworks/paintings-prints/abstract/collage', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate38 = DB::table('subsubcategories')->where('sscid','38')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '38')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/collage')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate38'=>$menusubsubcate38,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 39
Route::get('buy/artworks/paintings-prints/abstract/colour', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate39 = DB::table('subsubcategories')->where('sscid','39')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '39')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/colour')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate39'=>$menusubsubcate39,
											   'menu1'=>$menu1
											   ));
});

// SUB-SUB-CATEGORY 40
Route::get('buy/artworks/paintings-prints/abstract/figurative', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate40 = DB::table('subsubcategories')->where('sscid','40')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '40')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/figurative')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate40'=>$menusubsubcate40,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 41
Route::get('buy/artworks/paintings-prints/abstract/geometric', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate41 = DB::table('subsubcategories')->where('sscid','41')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '41')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/geometric')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate41'=>$menusubsubcate41,
											   'menu1'=>$menu1
											   ));
});	


// SUB-SUB-CATEGORY 42
Route::get('buy/artworks/paintings-prints/abstract/irregular-forms', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate42 = DB::table('subsubcategories')->where('sscid','42')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '42')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/irregular-forms')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate42'=>$menusubsubcate42,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 38
Route::get('buy/artworks/paintings-prints/abstract/landscape', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate43 = DB::table('subsubcategories')->where('sscid','43')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '43')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/landscape')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate43'=>$menusubsubcate43,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 44
Route::get('buy/artworks/paintings-prints/abstract/man-made-objects', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate44 = DB::table('subsubcategories')->where('sscid','44')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '44')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/man-made-objects')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate44'=>$menusubsubcate44,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 45
Route::get('buy/artworks/paintings-prints/abstract/text', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate45 = DB::table('subsubcategories')->where('sscid','45')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '45')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/text')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate45'=>$menusubsubcate45,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 46
Route::get('buy/artworks/paintings-prints/abstract/organic', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate46 = DB::table('subsubcategories')->where('sscid','46')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '46')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/organic')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate46'=>$menusubsubcate46,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 47
Route::get('buy/artworks/paintings-prints/abstract/other-abstract', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate18 = DB::table('subcategories')->where('scid','18')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate47 = DB::table('subsubcategories')->where('sscid','47')->get();
		  
		  // NO SUB-SUB-CATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '18')->where('subsubcat_id', '47')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/abstract/other-abstract')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate18'=>$menusubcate18,
											   'menusubsubcate47'=>$menusubsubcate47,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 48
Route::get('buy/artworks/paintings-prints/animals/aquatic-life', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubsubcate55 = DB::table('subsubsubcategories')->where('ssscid','55')->get();
		  $menusubsubsubcate56 = DB::table('subsubsubcategories')->where('ssscid','56')->get();
		  $menusubsubsubcate57 = DB::table('subsubsubcategories')->where('ssscid','57')->get();
		  $menusubsubsubcate58 = DB::table('subsubsubcategories')->where('ssscid','58')->get();
		  $menusubsubsubcate59 = DB::table('subsubsubcategories')->where('ssscid','59')->get();
		  $menusubsubsubcate60 = DB::table('subsubsubcategories')->where('ssscid','60')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate55'=>$menusubsubsubcate55,
											   'menusubsubsubcate56'=>$menusubsubsubcate56,
											   'menusubsubsubcate57'=>$menusubsubsubcate57,
											   'menusubsubsubcate58'=>$menusubsubsubcate58,
											   'menusubsubsubcate59'=>$menusubsubsubcate59,
											   'menusubsubsubcate60'=>$menusubsubsubcate60,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 49
Route::get('buy/artworks/paintings-prints/animals/birds', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubsubcate61 = DB::table('subsubsubcategories')->where('ssscid','61')->get();
		  $menusubsubsubcate62 = DB::table('subsubsubcategories')->where('ssscid','62')->get();
		  $menusubsubsubcate63 = DB::table('subsubsubcategories')->where('ssscid','63')->get();
		  $menusubsubsubcate64 = DB::table('subsubsubcategories')->where('ssscid','64')->get();
		  $menusubsubsubcate65 = DB::table('subsubsubcategories')->where('ssscid','65')->get();
		  $menusubsubsubcate66 = DB::table('subsubsubcategories')->where('ssscid','66')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate61'=>$menusubsubsubcate61,
											   'menusubsubsubcate62'=>$menusubsubsubcate62,
											   'menusubsubsubcate63'=>$menusubsubsubcate63,
											   'menusubsubsubcate64'=>$menusubsubsubcate64,
											   'menusubsubsubcate65'=>$menusubsubsubcate65,
											   'menusubsubsubcate66'=>$menusubsubsubcate66,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 50
Route::get('buy/artworks/paintings-prints/animals/insect-bugs', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubsubcate67 = DB::table('subsubsubcategories')->where('ssscid','67')->get();
		  $menusubsubsubcate68 = DB::table('subsubsubcategories')->where('ssscid','68')->get();
		  $menusubsubsubcate69 = DB::table('subsubsubcategories')->where('ssscid','69')->get();
		  $menusubsubsubcate70 = DB::table('subsubsubcategories')->where('ssscid','70')->get();
		  $menusubsubsubcate71 = DB::table('subsubsubcategories')->where('ssscid','71')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '50')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/insect-bugs')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubsubcate67'=>$menusubsubsubcate67,
											   'menusubsubsubcate68'=>$menusubsubsubcate68,
											   'menusubsubsubcate69'=>$menusubsubsubcate69,
											   'menusubsubsubcate70'=>$menusubsubsubcate70,
											   'menusubsubsubcate71'=>$menusubsubsubcate71,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 51
Route::get('buy/artworks/paintings-prints/animals/dogs-puppies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubsubcate72 = DB::table('subsubsubcategories')->where('ssscid','72')->get();
		  $menusubsubsubcate73 = DB::table('subsubsubcategories')->where('ssscid','73')->get();
		  $menusubsubsubcate74 = DB::table('subsubsubcategories')->where('ssscid','74')->get();
		  $menusubsubsubcate75 = DB::table('subsubsubcategories')->where('ssscid','75')->get();
		  $menusubsubsubcate76 = DB::table('subsubsubcategories')->where('ssscid','76')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '51')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/dogs-puppies')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubsubcate72'=>$menusubsubsubcate72,
											   'menusubsubsubcate73'=>$menusubsubsubcate73,
											   'menusubsubsubcate74'=>$menusubsubsubcate74,
											   'menusubsubsubcate75'=>$menusubsubsubcate75,
											   'menusubsubsubcate76'=>$menusubsubsubcate76,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 52
Route::get('buy/artworks/paintings-prints/animals/farm-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate52 = DB::table('subsubcategories')->where('sscid','52')->get();
		  
		  // GETS SUB-SUB-CATEGORIES
		  $menusubsubsubcate77 = DB::table('subsubsubcategories')->where('ssscid','77')->get();
		  $menusubsubsubcate78 = DB::table('subsubsubcategories')->where('ssscid','78')->get();
		  $menusubsubsubcate79 = DB::table('subsubsubcategories')->where('ssscid','79')->get();
		  $menusubsubsubcate80 = DB::table('subsubsubcategories')->where('ssscid','80')->get();

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '52')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/farm-animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate52'=>$menusubsubcate52,
											   'menusubsubsubcate77'=>$menusubsubsubcate77,
											   'menusubsubsubcate78'=>$menusubsubsubcate78,
											   'menusubsubsubcate79'=>$menusubsubsubcate79,
											   'menusubsubsubcate80'=>$menusubsubsubcate80,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 53
Route::get('buy/artworks/paintings-prints/animals/other-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate53 = DB::table('subsubcategories')->where('sscid','53')->get();
		  
		  // NO SUBSUBSUBCATEGORIES

		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '53')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/other-animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate53'=>$menusubsubcate53,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 54
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate81 = DB::table('subsubsubcategories')->where('ssscid','81')->get();
		  $menusubsubsubcate82 = DB::table('subsubsubcategories')->where('ssscid','82')->get();
		  $menusubsubsubcate83 = DB::table('subsubsubcategories')->where('ssscid','83')->get();
		  $menusubsubsubcate84 = DB::table('subsubsubcategories')->where('ssscid','84')->get();
		  $menusubsubsubcate85 = DB::table('subsubsubcategories')->where('ssscid','85')->get();
		  $menusubsubsubcate86 = DB::table('subsubsubcategories')->where('ssscid','86')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate81'=>$menusubsubsubcate81,
											   'menusubsubsubcate82'=>$menusubsubsubcate82,
											   'menusubsubsubcate83'=>$menusubsubsubcate83,
											   'menusubsubsubcate84'=>$menusubsubsubcate84,
											   'menusubsubsubcate85'=>$menusubsubsubcate85,
											   'menusubsubsubcate86'=>$menusubsubsubcate86,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 55
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/plants', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate55 = DB::table('subsubcategories')->where('sscid','55')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate87 = DB::table('subsubsubcategories')->where('ssscid','87')->get();
		  $menusubsubsubcate88 = DB::table('subsubsubcategories')->where('ssscid','88')->get();
		  $menusubsubsubcate89 = DB::table('subsubsubcategories')->where('ssscid','89')->get();
		  $menusubsubsubcate90 = DB::table('subsubsubcategories')->where('ssscid','90')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '55')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/plants')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate55'=>$menusubsubcate55,
											   'menusubsubsubcate87'=>$menusubsubsubcate87,
											   'menusubsubsubcate88'=>$menusubsubsubcate88,
											   'menusubsubsubcate89'=>$menusubsubsubcate89,
											   'menusubsubsubcate90'=>$menusubsubsubcate90,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 56
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/trees', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate56 = DB::table('subsubcategories')->where('sscid','56')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '56')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/trees')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate56'=>$menusubsubcate56,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 57
Route::get('buy/artworks/paintings-prints/people-figures/celebrity', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate57 = DB::table('subsubcategories')->where('sscid','57')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate91 = DB::table('subsubsubcategories')->where('ssscid','91')->get();
		  $menusubsubsubcate92 = DB::table('subsubsubcategories')->where('ssscid','92')->get();
		  $menusubsubsubcate93 = DB::table('subsubsubcategories')->where('ssscid','93')->get();
		  $menusubsubsubcate94 = DB::table('subsubsubcategories')->where('ssscid','94')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '57')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/celebrity')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate57'=>$menusubsubcate57,
											   'menusubsubsubcate91'=>$menusubsubsubcate91,
											   'menusubsubsubcate92'=>$menusubsubsubcate92,
											   'menusubsubsubcate93'=>$menusubsubsubcate93,
											   'menusubsubsubcate94'=>$menusubsubsubcate94,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 58
Route::get('buy/artworks/paintings-prints/people-figures/dance', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate58 = DB::table('subsubcategories')->where('sscid','58')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '58')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/dance')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate58'=>$menusubsubcate58,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 59
Route::get('buy/artworks/paintings-prints/people-figures/animation-anime-comics', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate59 = DB::table('subsubcategories')->where('sscid','59')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate95 = DB::table('subsubsubcategories')->where('ssscid','95')->get();
		  $menusubsubsubcate96 = DB::table('subsubsubcategories')->where('ssscid','96')->get();
		  $menusubsubsubcate97 = DB::table('subsubsubcategories')->where('ssscid','97')->get();
		  $menusubsubsubcate98 = DB::table('subsubsubcategories')->where('ssscid','98')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '59')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/animation-anime-comics')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate59'=>$menusubsubcate59,
											   'menusubsubsubcate95'=>$menusubsubsubcate95,
											   'menusubsubsubcate96'=>$menusubsubsubcate96,
											   'menusubsubsubcate97'=>$menusubsubsubcate97,
											   'menusubsubsubcate98'=>$menusubsubsubcate98,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 60
Route::get('buy/artworks/paintings-prints/people-figures/occupations', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate99 = DB::table('subsubsubcategories')->where('ssscid','99')->get();
		  $menusubsubsubcate100 = DB::table('subsubsubcategories')->where('ssscid','100')->get();
		  $menusubsubsubcate101 = DB::table('subsubsubcategories')->where('ssscid','101')->get();
		  $menusubsubsubcate102 = DB::table('subsubsubcategories')->where('ssscid','102')->get();
		  $menusubsubsubcate103 = DB::table('subsubsubcategories')->where('ssscid','103')->get();
		  $menusubsubsubcate104 = DB::table('subsubsubcategories')->where('ssscid','104')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate99'=>$menusubsubsubcate99,
											   'menusubsubsubcate100'=>$menusubsubsubcate100,
											   'menusubsubsubcate101'=>$menusubsubsubcate101,
											   'menusubsubsubcate102'=>$menusubsubsubcate102,
											   'menusubsubsubcate103'=>$menusubsubsubcate103,
											   'menusubsubsubcate104'=>$menusubsubsubcate104,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 61
Route::get('buy/artworks/paintings-prints/people-figures/potrait', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate61 = DB::table('subsubcategories')->where('sscid','61')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate105 = DB::table('subsubsubcategories')->where('ssscid','105')->get();
		  $menusubsubsubcate106 = DB::table('subsubsubcategories')->where('ssscid','106')->get();
		  $menusubsubsubcate107 = DB::table('subsubsubcategories')->where('ssscid','107')->get();
		  $menusubsubsubcate108 = DB::table('subsubsubcategories')->where('ssscid','108')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '61')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/potrait')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate61'=>$menusubsubcate61,
											   'menusubsubsubcate105'=>$menusubsubsubcate105,
											   'menusubsubsubcate106'=>$menusubsubsubcate106,
											   'menusubsubsubcate107'=>$menusubsubsubcate107,
											   'menusubsubsubcate108'=>$menusubsubsubcate108,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 62
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate109 = DB::table('subsubsubcategories')->where('ssscid','109')->get();
		  $menusubsubsubcate110 = DB::table('subsubsubcategories')->where('ssscid','110')->get();
		  $menusubsubsubcate111 = DB::table('subsubsubcategories')->where('ssscid','111')->get();
		  $menusubsubsubcate112 = DB::table('subsubsubcategories')->where('ssscid','112')->get();
		  $menusubsubsubcate113 = DB::table('subsubsubcategories')->where('ssscid','113')->get();
		  $menusubsubsubcate114 = DB::table('subsubsubcategories')->where('ssscid','114')->get();
		  $menusubsubsubcate115 = DB::table('subsubsubcategories')->where('ssscid','115')->get();
		  $menusubsubsubcate116 = DB::table('subsubsubcategories')->where('ssscid','116')->get();
		  $menusubsubsubcate117 = DB::table('subsubsubcategories')->where('ssscid','117')->get();



		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate109'=>$menusubsubsubcate109,
											   'menusubsubsubcate110'=>$menusubsubsubcate110,
											   'menusubsubsubcate111'=>$menusubsubsubcate111,
											   'menusubsubsubcate112'=>$menusubsubsubcate112,
											   'menusubsubsubcate113'=>$menusubsubsubcate113,
											   'menusubsubsubcate114'=>$menusubsubsubcate114,
											   'menusubsubsubcate115'=>$menusubsubsubcate115,
											   'menusubsubsubcate116'=>$menusubsubsubcate116,
											   'menusubsubsubcate117'=>$menusubsubsubcate117,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 63
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/african', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate63 = DB::table('subsubcategories')->where('sscid','63')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate118 = DB::table('subsubsubcategories')->where('ssscid','118')->get();
		  $menusubsubsubcate119 = DB::table('subsubsubcategories')->where('ssscid','119')->get();
		  $menusubsubsubcate120 = DB::table('subsubsubcategories')->where('ssscid','120')->get();
		  $menusubsubsubcate121 = DB::table('subsubsubcategories')->where('ssscid','121')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '63')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/african')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate63'=>$menusubsubcate63,
											   'menusubsubsubcate118'=>$menusubsubsubcate118,
											   'menusubsubsubcate119'=>$menusubsubsubcate119,
											   'menusubsubsubcate120'=>$menusubsubsubcate120,
											   'menusubsubsubcate121'=>$menusubsubsubcate121,
											   
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 64
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/british', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate64 = DB::table('subsubcategories')->where('sscid','64')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '64')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/british')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate64'=>$menusubsubcate64,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 65
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/americana', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate65 = DB::table('subsubcategories')->where('sscid','65')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '65')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/americana')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate65'=>$menusubsubcate65,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 66
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate122 = DB::table('subsubsubcategories')->where('ssscid','122')->get();
		  $menusubsubsubcate123 = DB::table('subsubsubcategories')->where('ssscid','123')->get();
		  $menusubsubsubcate124 = DB::table('subsubsubcategories')->where('ssscid','124')->get();
		  $menusubsubsubcate125 = DB::table('subsubsubcategories')->where('ssscid','125')->get();
		  $menusubsubsubcate126 = DB::table('subsubsubcategories')->where('ssscid','126')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '66')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubsubcate122'=>$menusubsubsubcate122,
											   'menusubsubsubcate123'=>$menusubsubsubcate123,
											   'menusubsubsubcate124'=>$menusubsubsubcate124,
											   'menusubsubsubcate125'=>$menusubsubsubcate125,
											   'menusubsubsubcate126'=>$menusubsubsubcate126,
											   'menu1'=>$menu1
											   ));
});


// SUB-SUB-CATEGORY 67
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/egyptian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate67 = DB::table('subsubcategories')->where('sscid','67')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '67')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/egyptian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate67'=>$menusubsubcate67,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 68
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/italian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate68 = DB::table('subsubcategories')->where('sscid','68')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '68')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/italian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate68'=>$menusubsubcate68,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 69
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/mexican', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate69 = DB::table('subsubcategories')->where('sscid','69')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '69')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/mexican')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate69'=>$menusubsubcate69,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 70
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/russian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate70 = DB::table('subsubcategories')->where('sscid','70')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '70')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/russian')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate70'=>$menusubsubcate70,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 71
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate71 = DB::table('subsubcategories')->where('sscid','71')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '71')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/others')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate71'=>$menusubsubcate71,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 72
Route::get('buy/artworks/paintings-prints/science-technology/ecology', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate72 = DB::table('subsubcategories')->where('sscid','72')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '72')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/ecology')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate72'=>$menusubsubcate72,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 74
Route::get('buy/artworks/paintings-prints/science-technology/energy', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate73 = DB::table('subsubcategories')->where('sscid','73')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '73')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/energy')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate73'=>$menusubsubcate73,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 74
Route::get('buy/artworks/paintings-prints/science-technology/history', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate74 = DB::table('subsubcategories')->where('sscid','74')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '74')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/history')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate74'=>$menusubsubcate74,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 75
Route::get('buy/artworks/paintings-prints/science-technology/medicine', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate75 = DB::table('subsubcategories')->where('sscid','75')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '75')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/medicine')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate75'=>$menusubsubcate75,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 76
Route::get('buy/artworks/paintings-prints/science-technology/people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate76 = DB::table('subsubcategories')->where('sscid','76')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '76')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/people')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate76'=>$menusubsubcate76,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 77
Route::get('buy/artworks/paintings-prints/science-technology/research', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate77 = DB::table('subsubcategories')->where('sscid','77')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '77')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/research')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate77'=>$menusubsubcate77,
											   'menu1'=>$menu1
											   ));		
});



// SUB-SUB-CATEGORY 78
Route::get('buy/artworks/paintings-prints/science-technology/space', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate78 = DB::table('subsubcategories')->where('sscid','78')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '78')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/space')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate78'=>$menusubsubcate78,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 79
Route::get('buy/artworks/paintings-prints/science-technology/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate23 = DB::table('subcategories')->where('scid','23')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate79 = DB::table('subsubcategories')->where('sscid','79')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '23')->where('subsubcat_id', '79')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/science-technology/others')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate23'=>$menusubcate23,
											   'menusubsubcate79'=>$menusubsubcate79,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 80
Route::get('buy/artworks/paintings-prints/politics-patriotism/flags-symbols', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate80 = DB::table('subsubcategories')->where('sscid','80')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '24')->where('subsubcat_id', '80')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/politics-patriotism/flags-symbols')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate24'=>$menusubcate24,
											   'menusubsubcate80'=>$menusubsubcate80,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 81
Route::get('buy/artworks/paintings-prints/politics-patriotism/law', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate81 = DB::table('subsubcategories')->where('sscid','81')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '24')->where('subsubcat_id', '81')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/politics-patriotism/law')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate24'=>$menusubcate24,
											   'menusubsubcate81'=>$menusubsubcate81,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 82
Route::get('buy/artworks/paintings-prints/politics-patriotism/military-war', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate82 = DB::table('subsubcategories')->where('sscid','82')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '24')->where('subsubcat_id', '82')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/politics-patriotism/military-war')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate24'=>$menusubcate24,
											   'menusubsubcate82'=>$menusubsubcate82,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 83
Route::get('buy/artworks/paintings-prints/politics-patriotism/politics', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate83 = DB::table('subsubcategories')->where('sscid','83')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '24')->where('subsubcat_id', '83')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/politics-patriotism/politics')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate24'=>$menusubcate24,
											   'menusubsubcate83'=>$menusubsubcate83,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 84
Route::get('buy/artworks/paintings-prints/politics-patriotism/other-politics-patriotism', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate24 = DB::table('subcategories')->where('scid','24')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate84 = DB::table('subsubcategories')->where('sscid','84')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '24')->where('subsubcat_id', '84')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/politics-patriotism/other-politics-patriotism')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate24'=>$menusubcate24,
											   'menusubsubcate84'=>$menusubsubcate84,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 85
Route::get('buy/artworks/drawings-illustration/abstract/collage', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate85 = DB::table('subsubcategories')->where('sscid','85')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '85')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/collage')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate85'=>$menusubsubcate85,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 86
Route::get('buy/artworks/drawings-illustration/abstract/colour', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate86 = DB::table('subsubcategories')->where('sscid','86')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '86')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/colour')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate86'=>$menusubsubcate86,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 87
Route::get('buy/artworks/drawings-illustration/abstract/figurative', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate87 = DB::table('subsubcategories')->where('sscid','87')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '87')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/figurative')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate87'=>$menusubsubcate87,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 88
Route::get('buy/artworks/drawings-illustration/abstract/geometric', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate88 = DB::table('subsubcategories')->where('sscid','88')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '88')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/geometric')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate88'=>$menusubsubcate88,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 89
Route::get('buy/artworks/drawings-illustration/abstract/irregular-forms', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate89 = DB::table('subsubcategories')->where('sscid','89')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '89')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/irregular-forms')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate89'=>$menusubsubcate89,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 90
Route::get('buy/artworks/drawings-illustration/abstract/landscape', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate90 = DB::table('subsubcategories')->where('sscid','90')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '90')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/landscape')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate90'=>$menusubsubcate90,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 91
Route::get('buy/artworks/drawings-illustration/abstract/man-made-objects', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate91 = DB::table('subsubcategories')->where('sscid','91')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '91')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/man-made-objects')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate91'=>$menusubsubcate91,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 92
Route::get('buy/artworks/drawings-illustration/abstract/movement', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate92 = DB::table('subsubcategories')->where('sscid','92')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '92')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/movement')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate92'=>$menusubsubcate92,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 93
Route::get('buy/artworks/drawings-illustration/abstract/text', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate93 = DB::table('subsubcategories')->where('sscid','93')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '93')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/text')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate93'=>$menusubsubcate93,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 94
Route::get('buy/artworks/drawings-illustration/abstract/organic', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate94 = DB::table('subsubcategories')->where('sscid','94')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '94')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/organic')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate94'=>$menusubsubcate94,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 95
Route::get('buy/artworks/drawings-illustration/abstract/other-abstract', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate34 = DB::table('subcategories')->where('scid','34')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate95 = DB::table('subsubcategories')->where('sscid','95')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '34')->where('subsubcat_id', '95')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/abstract/other-abstract')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate34'=>$menusubcate34,
											   'menusubsubcate95'=>$menusubsubcate95,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 96
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate127 = DB::table('subsubsubcategories')->where('ssscid','127')->get();
		   $menusubsubsubcate128 = DB::table('subsubsubcategories')->where('ssscid','128')->get();
		   $menusubsubsubcate129 = DB::table('subsubsubcategories')->where('ssscid','129')->get();
		   $menusubsubsubcate130 = DB::table('subsubsubcategories')->where('ssscid','130')->get();
		   $menusubsubsubcate131 = DB::table('subsubsubcategories')->where('ssscid','131')->get();
		   $menusubsubsubcate132 = DB::table('subsubsubcategories')->where('ssscid','132')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate127'=>$menusubsubsubcate127,
											   'menusubsubsubcate128'=>$menusubsubsubcate128,
											   'menusubsubsubcate129'=>$menusubsubsubcate129,
											   'menusubsubsubcate130'=>$menusubsubsubcate130,
											   'menusubsubsubcate131'=>$menusubsubsubcate131,
											   'menusubsubsubcate132'=>$menusubsubsubcate132,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 97
Route::get('buy/artworks/drawings-illustration/animals/birds', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate133 = DB::table('subsubsubcategories')->where('ssscid','133')->get();
		   $menusubsubsubcate134 = DB::table('subsubsubcategories')->where('ssscid','134')->get();
		   $menusubsubsubcate135 = DB::table('subsubsubcategories')->where('ssscid','135')->get();
		   $menusubsubsubcate136 = DB::table('subsubsubcategories')->where('ssscid','136')->get();
		   $menusubsubsubcate137 = DB::table('subsubsubcategories')->where('ssscid','137')->get();
		   $menusubsubsubcate138 = DB::table('subsubsubcategories')->where('ssscid','138')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate133'=>$menusubsubsubcate133,
											   'menusubsubsubcate134'=>$menusubsubsubcate134,
											   'menusubsubsubcate135'=>$menusubsubsubcate135,
											   'menusubsubsubcate136'=>$menusubsubsubcate136,
											   'menusubsubsubcate137'=>$menusubsubsubcate137,
											   'menusubsubsubcate138'=>$menusubsubsubcate138,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 98
Route::get('buy/artworks/drawings-illustration/animals/insect-bugs', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate139 = DB::table('subsubsubcategories')->where('ssscid','139')->get();
		   $menusubsubsubcate140 = DB::table('subsubsubcategories')->where('ssscid','140')->get();
		   $menusubsubsubcate141 = DB::table('subsubsubcategories')->where('ssscid','141')->get();
		   $menusubsubsubcate142 = DB::table('subsubsubcategories')->where('ssscid','142')->get();
		   $menusubsubsubcate143 = DB::table('subsubsubcategories')->where('ssscid','143')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '98')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/insect-bugs')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubsubcate139'=>$menusubsubsubcate139,
											   'menusubsubsubcate140'=>$menusubsubsubcate140,
											   'menusubsubsubcate141'=>$menusubsubsubcate141,
											   'menusubsubsubcate142'=>$menusubsubsubcate142,
											   'menusubsubsubcate143'=>$menusubsubsubcate143,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 99
Route::get('buy/artworks/drawings-illustration/animals/dogs-puppies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate144 = DB::table('subsubsubcategories')->where('ssscid','144')->get();
		   $menusubsubsubcate145 = DB::table('subsubsubcategories')->where('ssscid','145')->get();
		   $menusubsubsubcate146 = DB::table('subsubsubcategories')->where('ssscid','146')->get();
		   $menusubsubsubcate147 = DB::table('subsubsubcategories')->where('ssscid','147')->get();
		   $menusubsubsubcate148 = DB::table('subsubsubcategories')->where('ssscid','148')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '99')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/dogs-puppies')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubsubcate144'=>$menusubsubsubcate144,
											   'menusubsubsubcate145'=>$menusubsubsubcate145,
											   'menusubsubsubcate146'=>$menusubsubsubcate146,
											   'menusubsubsubcate147'=>$menusubsubsubcate147,
											   'menusubsubsubcate148'=>$menusubsubsubcate148,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 100
Route::get('buy/artworks/drawings-illustration/animals/farm-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate100 = DB::table('subsubcategories')->where('sscid','100')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate149 = DB::table('subsubsubcategories')->where('ssscid','149')->get();
		   $menusubsubsubcate150 = DB::table('subsubsubcategories')->where('ssscid','150')->get();
		   $menusubsubsubcate151 = DB::table('subsubsubcategories')->where('ssscid','151')->get();
		   $menusubsubsubcate152 = DB::table('subsubsubcategories')->where('ssscid','152')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '100')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/farm-animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate100'=>$menusubsubcate100,
											   'menusubsubsubcate149'=>$menusubsubsubcate149,
											   'menusubsubsubcate150'=>$menusubsubsubcate150,
											   'menusubsubsubcate151'=>$menusubsubsubcate151,
											   'menusubsubsubcate152'=>$menusubsubsubcate152,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 101
Route::get('buy/artworks/drawings-illustration/animals/other-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate101 = DB::table('subsubcategories')->where('sscid','101')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/other-animals')->with(array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate101'=>$menusubsubcate101,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 102
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate153 = DB::table('subsubsubcategories')->where('ssscid','153')->get();
		   $menusubsubsubcate154 = DB::table('subsubsubcategories')->where('ssscid','154')->get();
		   $menusubsubsubcate155 = DB::table('subsubsubcategories')->where('ssscid','155')->get();
		   $menusubsubsubcate156 = DB::table('subsubsubcategories')->where('ssscid','156')->get();
		   $menusubsubsubcate157 = DB::table('subsubsubcategories')->where('ssscid','157')->get();
		   $menusubsubsubcate158 = DB::table('subsubsubcategories')->where('ssscid','158')->get();
		   $menusubsubsubcate159 = DB::table('subsubsubcategories')->where('ssscid','159')->get();
		   $menusubsubsubcate160 = DB::table('subsubsubcategories')->where('ssscid','160')->get();
		   $menusubsubsubcate161 = DB::table('subsubsubcategories')->where('ssscid','161')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate153'=>$menusubsubsubcate153,
											   'menusubsubsubcate154'=>$menusubsubsubcate154,
											   'menusubsubsubcate155'=>$menusubsubsubcate155,
											   'menusubsubsubcate156'=>$menusubsubsubcate156,
											   'menusubsubsubcate157'=>$menusubsubsubcate157,
											   'menusubsubsubcate158'=>$menusubsubsubcate158,
											   'menusubsubsubcate159'=>$menusubsubsubcate159,
											   'menusubsubsubcate160'=>$menusubsubsubcate160,
											   'menusubsubsubcate161'=>$menusubsubsubcate161,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 103
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate103 = DB::table('subsubcategories')->where('sscid','103')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate162 = DB::table('subsubsubcategories')->where('ssscid','162')->get();
		   $menusubsubsubcate163 = DB::table('subsubsubcategories')->where('ssscid','163')->get();
		   $menusubsubsubcate164 = DB::table('subsubsubcategories')->where('ssscid','164')->get();
		   $menusubsubsubcate165 = DB::table('subsubsubcategories')->where('ssscid','165')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '103')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate103'=>$menusubsubcate103,
											   'menusubsubsubcate162'=>$menusubsubsubcate162,
											   'menusubsubsubcate163'=>$menusubsubsubcate163,
											   'menusubsubsubcate164'=>$menusubsubsubcate164,
											   'menusubsubsubcate165'=>$menusubsubsubcate165,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 104
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/americana', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate104 = DB::table('subsubcategories')->where('sscid','104')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '104')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/americana')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate104'=>$menusubsubcate104,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 105
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate166 = DB::table('subsubsubcategories')->where('ssscid','166')->get();
		   $menusubsubsubcate167 = DB::table('subsubsubcategories')->where('ssscid','167')->get();
		   $menusubsubsubcate168 = DB::table('subsubsubcategories')->where('ssscid','168')->get();
		   $menusubsubsubcate169 = DB::table('subsubsubcategories')->where('ssscid','169')->get();
		   $menusubsubsubcate170 = DB::table('subsubsubcategories')->where('ssscid','170')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '105')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubsubcate166'=>$menusubsubsubcate166,
											   'menusubsubsubcate167'=>$menusubsubsubcate167,
											   'menusubsubsubcate168'=>$menusubsubsubcate168,
											   'menusubsubsubcate169'=>$menusubsubsubcate169,
											   'menusubsubsubcate170'=>$menusubsubsubcate170,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 106
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/egyptian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate106 = DB::table('subsubcategories')->where('sscid','106')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '106')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/egyptian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate106'=>$menusubsubcate106,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 107
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/italian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate107 = DB::table('subsubcategories')->where('sscid','107')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '107')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/italian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate107'=>$menusubsubcate107,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 108
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/mexican', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate108 = DB::table('subsubcategories')->where('sscid','108')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '108')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/mexican')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate108'=>$menusubsubcate108,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 109
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/russian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate109 = DB::table('subsubcategories')->where('sscid','109')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '109')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/russian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate109'=>$menusubsubcate109,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 123
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/british', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate123 = DB::table('subsubcategories')->where('sscid','123')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '123')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/british')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate123'=>$menusubsubcate123,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 110
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate110 = DB::table('subsubcategories')->where('sscid','110')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '110')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/others')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate110'=>$menusubsubcate110,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 111
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','37')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate171 = DB::table('subsubsubcategories')->where('ssscid','171')->get();
		  $menusubsubsubcate172 = DB::table('subsubsubcategories')->where('ssscid','172')->get();
		  $menusubsubsubcate173 = DB::table('subsubsubcategories')->where('ssscid','173')->get();
		  $menusubsubsubcate174 = DB::table('subsubsubcategories')->where('ssscid','174')->get();
		  $menusubsubsubcate175 = DB::table('subsubsubcategories')->where('ssscid','175')->get();
		  $menusubsubsubcate176 = DB::table('subsubsubcategories')->where('ssscid','176')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate171'=>$menusubsubsubcate171,
											   'menusubsubsubcate172'=>$menusubsubsubcate172,
											   'menusubsubsubcate173'=>$menusubsubsubcate173,
											   'menusubsubsubcate174'=>$menusubsubsubcate174,
											   'menusubsubsubcate175'=>$menusubsubsubcate175,
											   'menusubsubsubcate176'=>$menusubsubsubcate176,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 112
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/plants', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','37')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate112 = DB::table('subsubcategories')->where('sscid','112')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		  $menusubsubsubcate177 = DB::table('subsubsubcategories')->where('ssscid','177')->get();
		  $menusubsubsubcate178 = DB::table('subsubsubcategories')->where('ssscid','178')->get();
		  $menusubsubsubcate179 = DB::table('subsubsubcategories')->where('ssscid','179')->get();
		  $menusubsubsubcate180 = DB::table('subsubsubcategories')->where('ssscid','180')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '112')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/plants')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate112'=>$menusubsubcate112,
											   'menusubsubsubcate177'=>$menusubsubsubcate177,
											   'menusubsubsubcate178'=>$menusubsubsubcate178,
											   'menusubsubsubcate179'=>$menusubsubsubcate179,
											   'menusubsubsubcate180'=>$menusubsubsubcate180,
											   'menu1'=>$menu1
											   ));		
});



// SUB-SUB-CATEGORY 113
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/trees', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','37')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate113 = DB::table('subsubcategories')->where('sscid','113')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '113')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/trees')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate113'=>$menusubsubcate113,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 114
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','37')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate114 = DB::table('subsubcategories')->where('sscid','114')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '114')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/others')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate114'=>$menusubsubcate114,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 115
Route::get('buy/artworks/drawings-illustration/science-technology/ecology', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate115 = DB::table('subsubcategories')->where('sscid','115')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '115')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/ecology')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate115'=>$menusubsubcate115,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 116
Route::get('buy/artworks/drawings-illustration/science-technology/energy', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate116 = DB::table('subsubcategories')->where('sscid','116')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '116')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/energy')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate116'=>$menusubsubcate116,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 117
Route::get('buy/artworks/drawings-illustration/science-technology/history', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate117 = DB::table('subsubcategories')->where('sscid','117')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '117')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/history')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate117'=>$menusubsubcate117,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 118
Route::get('buy/artworks/drawings-illustration/science-technology/medicine', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate118 = DB::table('subsubcategories')->where('sscid','118')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '118')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/medicine')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate118'=>$menusubsubcate118,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 119
Route::get('buy/artworks/drawings-illustration/science-technology/people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate119 = DB::table('subsubcategories')->where('sscid','119')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '119')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate119'=>$menusubsubcate119,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 120
Route::get('buy/artworks/drawings-illustration/science-technology/research', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate120 = DB::table('subsubcategories')->where('sscid','120')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '120')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/research')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate120'=>$menusubsubcate120,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 121
Route::get('buy/artworks/drawings-illustration/science-technology/space', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate121 = DB::table('subsubcategories')->where('sscid','121')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '121')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/space')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate121'=>$menusubsubcate121,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-CATEGORY 122
Route::get('buy/artworks/drawings-illustration/science-technology/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate39 = DB::table('subcategories')->where('scid','39')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate122 = DB::table('subsubcategories')->where('sscid','122')->get();
		  
		  // NO SUBSUBSUBCATEGORIES


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '39')->where('subsubcat_id', '122')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/science-technology/others')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate39'=>$menusubcate39,
											   'menusubsubcate122'=>$menusubsubcate122,
											   'menu1'=>$menu1
											   ));		
});
									
											
											/*  SUB-SUB-CATEGORIES  */
											
											
										/*  SUB-SUB-SUB-CATEGORIES   */
										
// SUB-SUB-SUB-CATEGORY 1
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life/dolphins', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate1 = DB::table('subsubsubcategories')->where('ssscid','1')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->where('subsubsubcat_id', '1')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life/dolphins')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate1'=>$menusubsubsubcate1,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 2
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life/fish', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate2 = DB::table('subsubsubcategories')->where('ssscid','2')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->where('subsubsubcat_id', '2')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life/fish')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate2'=>$menusubsubsubcate2,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 3
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life/manatee', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate3 = DB::table('subsubsubcategories')->where('ssscid','3')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->where('subsubsubcat_id', '3')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life/manatee')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate3'=>$menusubsubsubcate3,
											   'menu1'=>$menu1
											   ));		
});



// SUB-SUB-SUB-CATEGORY 4
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life/seals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate4 = DB::table('subsubsubcategories')->where('ssscid','4')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->where('subsubsubcat_id', '4')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life/seals')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate4'=>$menusubsubsubcate4,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 5
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life/crustaceans', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate5 = DB::table('subsubsubcategories')->where('ssscid','5')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->where('subsubsubcat_id', '5')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life/crustaceans')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate5'=>$menusubsubsubcate5,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 6
Route::get('buy/artworks/sculptures-carvings/animals/aquatic-life/other-aquatic-life', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate11 = DB::table('subsubcategories')->where('sscid','11')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate6 = DB::table('subsubsubcategories')->where('ssscid','6')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '11')->where('subsubsubcat_id', '6')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/aquatic-life/other-aquatic-life')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate11'=>$menusubsubcate11,
											   'menusubsubsubcate6'=>$menusubsubsubcate6,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 7
Route::get('buy/artworks/sculptures-carvings/animals/birds/eagles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate7 = DB::table('subsubsubcategories')->where('ssscid','7')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->where('subsubsubcat_id', '7')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds/eagles')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate7'=>$menusubsubsubcate7,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 8
Route::get('buy/artworks/sculptures-carvings/animals/birds/flamingo', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate8 = DB::table('subsubsubcategories')->where('ssscid','8')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->where('subsubsubcat_id', '8')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds/flamingo')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate8'=>$menusubsubsubcate8,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 9
Route::get('buy/artworks/sculptures-carvings/animals/birds/ducks-loons', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate9 = DB::table('subsubsubcategories')->where('ssscid','9')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->where('subsubsubcat_id', '9')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds/ducks-loons')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate9'=>$menusubsubsubcate9,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 10
Route::get('buy/artworks/sculptures-carvings/animals/birds/hawk', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate10 = DB::table('subsubsubcategories')->where('ssscid','10')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->where('subsubsubcat_id', '10')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds/hawk')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate10'=>$menusubsubsubcate10,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 11
Route::get('buy/artworks/sculptures-carvings/animals/birds/peacock', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate11 = DB::table('subsubsubcategories')->where('ssscid','11')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->where('subsubsubcat_id', '11')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds/peacock')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate11'=>$menusubsubsubcate11,
											   'menu1'=>$menu1
											   ));		
});

// SUB-SUB-SUB-CATEGORY 12
Route::get('buy/artworks/sculptures-carvings/animals/birds/other-birds', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate12 = DB::table('subsubcategories')->where('sscid','12')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate12 = DB::table('subsubsubcategories')->where('ssscid','12')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '12')->where('subsubsubcat_id', '12')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/birds/other-birds')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate12'=>$menusubsubcate12,
											   'menusubsubsubcate12'=>$menusubsubsubcate12,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 13
Route::get('buy/artworks/sculptures-carvings/animals/insect-bugs/ant', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate13 = DB::table('subsubsubcategories')->where('ssscid','13')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '13')->where('subsubsubcat_id', '13')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/insect-bugs/ant')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubsubcate13'=>$menusubsubsubcate13,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 14
Route::get('buy/artworks/sculptures-carvings/animals/insect-bugs/bee-wasp', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate14 = DB::table('subsubsubcategories')->where('ssscid','14')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '13')->where('subsubsubcat_id', '14')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/insect-bugs/bee-wasp')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubsubcate14'=>$menusubsubsubcate14,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 15
Route::get('buy/artworks/sculptures-carvings/animals/insect-bugs/dragonfly', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate15 = DB::table('subsubsubcategories')->where('ssscid','15')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '13')->where('subsubsubcat_id', '15')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/insect-bugs/dragonfly')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubsubcate15'=>$menusubsubsubcate15,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 16
Route::get('buy/artworks/sculptures-carvings/animals/insect-bugs/beetles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate16 = DB::table('subsubsubcategories')->where('ssscid','16')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '13')->where('subsubsubcat_id', '16')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/insect-bugs/beetles')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubsubcate16'=>$menusubsubsubcate16,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 17
Route::get('buy/artworks/sculptures-carvings/animals/insect-bugs/other-insect-bugs', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate13 = DB::table('subsubcategories')->where('sscid','13')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate17 = DB::table('subsubsubcategories')->where('ssscid','17')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '13')->where('subsubsubcat_id', '17')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/insect-bugs/other-insect-bugs')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate13'=>$menusubsubcate13,
											   'menusubsubsubcate17'=>$menusubsubsubcate17,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 18
Route::get('buy/artworks/sculptures-carvings/animals/dogs-puppies/akita', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate18 = DB::table('subsubsubcategories')->where('ssscid','18')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '14')->where('subsubsubcat_id', '18')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/dogs-puppies/akita')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubsubcate18'=>$menusubsubsubcate18,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 19
Route::get('buy/artworks/sculptures-carvings/animals/dogs-puppies/dalmatian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate19 = DB::table('subsubsubcategories')->where('ssscid','19')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '14')->where('subsubsubcat_id', '19')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/dogs-puppies/dalmatian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubsubcate19'=>$menusubsubsubcate19,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 20
Route::get('buy/artworks/sculptures-carvings/animals/dogs-puppies/french-bulldog', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate20 = DB::table('subsubsubcategories')->where('ssscid','20')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '14')->where('subsubsubcat_id', '20')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/dogs-puppies/french-bulldog')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubsubcate20'=>$menusubsubsubcate20,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 21
Route::get('buy/artworks/sculptures-carvings/animals/dogs-puppies/pug', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate21 = DB::table('subsubsubcategories')->where('ssscid','21')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '14')->where('subsubsubcat_id', '21')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/dogs-puppies/pug')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubsubcate21'=>$menusubsubsubcate21,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 22
Route::get('buy/artworks/sculptures-carvings/animals/dogs-puppies/other-dogs-puppies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate14 = DB::table('subsubcategories')->where('sscid','14')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate22 = DB::table('subsubsubcategories')->where('ssscid','22')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '14')->where('subsubsubcat_id', '22')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/dogs-puppies/other-dogs-puppies')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate14'=>$menusubsubcate14,
											   'menusubsubsubcate22'=>$menusubsubsubcate22,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 23
Route::get('buy/artworks/sculptures-carvings/animals/farm-animals/chickens', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate15 = DB::table('subsubcategories')->where('sscid','15')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate23 = DB::table('subsubsubcategories')->where('ssscid','23')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '15')->where('subsubsubcat_id', '23')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/farm-animals/chickens')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate15'=>$menusubsubcate15,
											   'menusubsubsubcate23'=>$menusubsubsubcate23,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 24
Route::get('buy/artworks/sculptures-carvings/animals/farm-animals/cows-bulls', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate15 = DB::table('subsubcategories')->where('sscid','15')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate24 = DB::table('subsubsubcategories')->where('ssscid','24')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '15')->where('subsubsubcat_id', '24')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/farm-animals/cows-bulls')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate15'=>$menusubsubcate15,
											   'menusubsubsubcate24'=>$menusubsubsubcate24,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 25
Route::get('buy/artworks/sculptures-carvings/animals/farm-animals/sheep', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate15 = DB::table('subsubcategories')->where('sscid','15')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate25 = DB::table('subsubsubcategories')->where('ssscid','25')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '15')->where('subsubsubcat_id', '25')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/farm-animals/sheep')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate15'=>$menusubsubcate15,
											   'menusubsubsubcate25'=>$menusubsubsubcate25,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 26
Route::get('buy/artworks/sculptures-carvings/animals/farm-animals/other-farm-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate2 = DB::table('subcategories')->where('scid','2')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate15 = DB::table('subsubcategories')->where('sscid','15')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate26 = DB::table('subsubsubcategories')->where('ssscid','26')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '2')->where('subsubcat_id', '15')->where('subsubsubcat_id', '26')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/animals/farm-animals/other-farm-animals')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate2'=>$menusubcate2,
											   'menusubsubcate15'=>$menusubsubcate15,
											   'menusubsubsubcate26'=>$menusubsubsubcate26,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 27
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/yoruba-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate27 = DB::table('subsubsubcategories')->where('ssscid','27')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '27')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/yoruba-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate27'=>$menusubsubsubcate27,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 28
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/igbo-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate28 = DB::table('subsubsubcategories')->where('ssscid','28')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '28')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/igbo-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate28'=>$menusubsubsubcate28,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 29
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/hausa-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate29 = DB::table('subsubsubcategories')->where('ssscid','29')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '29')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/hausa-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate29'=>$menusubsubsubcate29,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 30
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/fulani-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate30 = DB::table('subsubsubcategories')->where('ssscid','30')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '30')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/fulani-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate30'=>$menusubsubsubcate30,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 27
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/ibibio-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate31 = DB::table('subsubsubcategories')->where('ssscid','31')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '31')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/ibibio-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate31'=>$menusubsubsubcate31,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 32
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/tiv-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate32 = DB::table('subsubsubcategories')->where('ssscid','32')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '32')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/tiv-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate32'=>$menusubsubsubcate32,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 33
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/nigerian-textiles-sculptures', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate33 = DB::table('subsubsubcategories')->where('ssscid','33')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '33')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/nigerian-textiles-sculptures')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate33'=>$menusubsubsubcate33,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 34
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/nigerian-tribal-masks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate34 = DB::table('subsubsubcategories')->where('ssscid','34')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '34')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/nigerian-tribal-masks')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate34'=>$menusubsubsubcate34,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 35
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/other-nigerian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate17 = DB::table('subsubcategories')->where('sscid','17')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate35 = DB::table('subsubsubcategories')->where('ssscid','35')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '17')->where('subsubsubcat_id', '35')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/nigerian/other-nigerian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate17'=>$menusubsubcate17,
											   'menusubsubsubcate35'=>$menusubsubsubcate35,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 36
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/african-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate18 = DB::table('subsubcategories')->where('sscid','18')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate36 = DB::table('subsubsubcategories')->where('ssscid','36')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '18')->where('subsubsubcat_id', '36')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/african-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate18'=>$menusubsubcate18,
											   'menusubsubsubcate36'=>$menusubsubsubcate36,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 36
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/african-textiles-sculptures', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate18 = DB::table('subsubcategories')->where('sscid','18')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate37 = DB::table('subsubsubcategories')->where('ssscid','37')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '18')->where('subsubsubcat_id', '37')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/african-textiles-sculptures')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate18'=>$menusubsubcate18,
											   'menusubsubsubcate37'=>$menusubsubsubcate37,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 38
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/african-tribal-masks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate18 = DB::table('subsubcategories')->where('sscid','18')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate38 = DB::table('subsubsubcategories')->where('ssscid','38')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '18')->where('subsubsubcat_id', '36')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/african-tribal-masks')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate18'=>$menusubsubcate18,
											   'menusubsubsubcate38'=>$menusubsubsubcate38,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 39
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/other-african', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate18 = DB::table('subsubcategories')->where('sscid','18')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate39 = DB::table('subsubsubcategories')->where('ssscid','39')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '18')->where('subsubsubcat_id', '39')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/african/other-african')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate18'=>$menusubsubcate18,
											   'menusubsubsubcate39'=>$menusubsubsubcate39,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 40
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate40 = DB::table('subsubsubcategories')->where('ssscid','40')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '21')->where('subsubsubcat_id', '40')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubsubcate40'=>$menusubsubsubcate40,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 41
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/chinese', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate41 = DB::table('subsubsubcategories')->where('ssscid','41')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '21')->where('subsubsubcat_id', '41')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/chinese')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubsubcate41'=>$menusubsubsubcate41,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 42
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/japanese', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate42 = DB::table('subsubsubcategories')->where('ssscid','42')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '21')->where('subsubsubcat_id', '42')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/japanese')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubsubcate42'=>$menusubsubsubcate42,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 43
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/thai', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate43 = DB::table('subsubsubcategories')->where('ssscid','43')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '21')->where('subsubsubcat_id', '43')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/thai')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubsubcate43'=>$menusubsubsubcate43,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 44
Route::get('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/other-asian-indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate3 = DB::table('subcategories')->where('scid','3')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate21 = DB::table('subsubcategories')->where('sscid','21')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate44 = DB::table('subsubsubcategories')->where('ssscid','44')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '3')->where('subsubcat_id', '21')->where('subsubsubcat_id', '44')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/ethnic-cultural-tribal/asian-indian/other-asian-indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate3'=>$menusubcate3,
											   'menusubsubcate21'=>$menusubsubcate21,
											   'menusubsubsubcate44'=>$menusubsubsubcate44,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 45
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/lilies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate45 = DB::table('subsubsubcategories')->where('ssscid','45')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->where('subsubsubcat_id', '45')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/lilies')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate45'=>$menusubsubsubcate45,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 46
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/roses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate46 = DB::table('subsubsubcategories')->where('ssscid','46')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->where('subsubsubcat_id', '46')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/roses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate46'=>$menusubsubsubcate46,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 47
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/tulips', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate47 = DB::table('subsubsubcategories')->where('ssscid','47')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->where('subsubsubcat_id', '47')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/tulips')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate47'=>$menusubsubsubcate47,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 48
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/wisteria', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate48 = DB::table('subsubsubcategories')->where('ssscid','48')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->where('subsubsubcat_id', '48')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/wisteria')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate48'=>$menusubsubsubcate48,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 49
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/angelica', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate49 = DB::table('subsubsubcategories')->where('ssscid','49')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->where('subsubsubcat_id', '49')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/angelica')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate49'=>$menusubsubsubcate49,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 50
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/other-flowers', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate27 = DB::table('subsubcategories')->where('sscid','27')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate50 = DB::table('subsubsubcategories')->where('ssscid','50')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '27')->where('subsubsubcat_id', '50')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/flowers/other-flowers')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate27'=>$menusubsubcate27,
											   'menusubsubsubcate50'=>$menusubsubsubcate50,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 51
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/acorns', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate28 = DB::table('subsubcategories')->where('sscid','28')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate51 = DB::table('subsubsubcategories')->where('ssscid','51')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '28')->where('subsubsubcat_id', '51')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/acorns')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate28'=>$menusubsubcate28,
											   'menusubsubsubcate51'=>$menusubsubsubcate51,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 52
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/cactus-cacti', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate28 = DB::table('subsubcategories')->where('sscid','28')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate52 = DB::table('subsubsubcategories')->where('ssscid','52')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '28')->where('subsubsubcat_id', '52')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/cactus-cacti')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate28'=>$menusubsubcate28,
											   'menusubsubsubcate52'=>$menusubsubsubcate52,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 53
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/grasses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate28 = DB::table('subsubcategories')->where('sscid','28')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate53 = DB::table('subsubsubcategories')->where('ssscid','53')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '28')->where('subsubsubcat_id', '53')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/grasses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate28'=>$menusubsubcate28,
											   'menusubsubsubcate53'=>$menusubsubsubcate53,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 54
Route::get('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/other-plants', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate4 = DB::table('subcategories')->where('scid','4')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate28 = DB::table('subsubcategories')->where('sscid','28')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate54 = DB::table('subsubsubcategories')->where('ssscid','54')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '1')->where('subcat_id', '4')->where('subsubcat_id', '28')->where('subsubsubcat_id', '54')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/sculptures-carvings/flowers-plants-trees/plants/other-plants')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate1'=>$menucate1,
											   'menusubcate4'=>$menusubcate4,
											   'menusubsubcate28'=>$menusubsubcate28,
											   'menusubsubsubcate54'=>$menusubsubsubcate54,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 55
Route::get('buy/artworks/paintings-prints/animals/aquatic-life/dolphins', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate55 = DB::table('subsubsubcategories')->where('ssscid','55')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->where('subsubsubcat_id', '55')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life/dolphins')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate55'=>$menusubsubsubcate55,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 56
Route::get('buy/artworks/paintings-prints/animals/aquatic-life/fish', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate56 = DB::table('subsubsubcategories')->where('ssscid','56')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->where('subsubsubcat_id', '56')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life/fish')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate56'=>$menusubsubsubcate56,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 57
Route::get('buy/artworks/paintings-prints/animals/aquatic-life/manatee', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate57 = DB::table('subsubsubcategories')->where('ssscid','57')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->where('subsubsubcat_id', '57')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life/manatee')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate57'=>$menusubsubsubcate57,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 58
Route::get('buy/artworks/paintings-prints/animals/aquatic-life/seals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate58 = DB::table('subsubsubcategories')->where('ssscid','58')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->where('subsubsubcat_id', '58')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life/seals')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate58'=>$menusubsubsubcate58,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 59
Route::get('buy/artworks/paintings-prints/animals/aquatic-life/crustaceans', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate59 = DB::table('subsubsubcategories')->where('ssscid','59')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->where('subsubsubcat_id', '59')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life/crustaceans')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate59'=>$menusubsubsubcate59,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 60
Route::get('buy/artworks/paintings-prints/animals/aquatic-life/other-aquatic-life', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate48 = DB::table('subsubcategories')->where('sscid','48')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate60 = DB::table('subsubsubcategories')->where('ssscid','60')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '48')->where('subsubsubcat_id', '60')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/aquatic-life/other-aquatic-life')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate48'=>$menusubsubcate48,
											   'menusubsubsubcate60'=>$menusubsubsubcate60,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 61
Route::get('buy/artworks/paintings-prints/animals/birds/eagles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate61 = DB::table('subsubsubcategories')->where('ssscid','61')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->where('subsubsubcat_id', '61')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds/eagles')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate61'=>$menusubsubsubcate61,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 62
Route::get('buy/artworks/paintings-prints/animals/birds/flamingo', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate62 = DB::table('subsubsubcategories')->where('ssscid','62')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->where('subsubsubcat_id', '62')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds/flamingo')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate62'=>$menusubsubsubcate62,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 63
Route::get('buy/artworks/paintings-prints/animals/birds/ducks-loons', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate63 = DB::table('subsubsubcategories')->where('ssscid','63')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->where('subsubsubcat_id', '63')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds/ducks-loons')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate63'=>$menusubsubsubcate63,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 64
Route::get('buy/artworks/paintings-prints/animals/birds/hawk', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate64 = DB::table('subsubsubcategories')->where('ssscid','64')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->where('subsubsubcat_id', '64')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds/hawk')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate64'=>$menusubsubsubcate64,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 65
Route::get('buy/artworks/paintings-prints/animals/birds/peacock', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate65 = DB::table('subsubsubcategories')->where('ssscid','65')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->where('subsubsubcat_id', '65')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds/peacock')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate65'=>$menusubsubsubcate65,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 66
Route::get('buy/artworks/paintings-prints/animals/birds/other-birds', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate49 = DB::table('subsubcategories')->where('sscid','49')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate66 = DB::table('subsubsubcategories')->where('ssscid','66')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '49')->where('subsubsubcat_id', '66')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/birds/other-birds')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate49'=>$menusubsubcate49,
											   'menusubsubsubcate66'=>$menusubsubsubcate66,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 67
Route::get('buy/artworks/paintings-prints/animals/insect-bugs/ant', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate67 = DB::table('subsubsubcategories')->where('ssscid','67')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '50')->where('subsubsubcat_id', '67')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/insect-bugs/ant')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubsubcate67'=>$menusubsubsubcate67,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 68
Route::get('buy/artworks/paintings-prints/animals/insect-bugs/bee-wasp', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate68 = DB::table('subsubsubcategories')->where('ssscid','68')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '50')->where('subsubsubcat_id', '68')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/insect-bugs/bee-wasp')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubsubcate68'=>$menusubsubsubcate68,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 69
Route::get('buy/artworks/paintings-prints/animals/insect-bugs/dragonfly', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate69 = DB::table('subsubsubcategories')->where('ssscid','69')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '50')->where('subsubsubcat_id', '69')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/insect-bugs/dragonfly')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubsubcate69'=>$menusubsubsubcate69,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 70
Route::get('buy/artworks/paintings-prints/animals/insect-bugs/beetles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate70 = DB::table('subsubsubcategories')->where('ssscid','70')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '50')->where('subsubsubcat_id', '70')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/insect-bugs/beetles')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubsubcate70'=>$menusubsubsubcate70,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 71
Route::get('buy/artworks/paintings-prints/animals/insect-bugs/other-insect-bugs', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate50 = DB::table('subsubcategories')->where('sscid','50')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate71 = DB::table('subsubsubcategories')->where('ssscid','71')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '50')->where('subsubsubcat_id', '71')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/insect-bugs/other-insect-bugs')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate50'=>$menusubsubcate50,
											   'menusubsubsubcate71'=>$menusubsubsubcate71,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 72
Route::get('buy/artworks/paintings-prints/animals/dogs-puppies/akita', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate72 = DB::table('subsubsubcategories')->where('ssscid','72')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '51')->where('subsubsubcat_id', '72')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/dogs-puppies/akita')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubsubcate72'=>$menusubsubsubcate72,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 73
Route::get('buy/artworks/paintings-prints/animals/dogs-puppies/dalmatian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate73 = DB::table('subsubsubcategories')->where('ssscid','73')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '51')->where('subsubsubcat_id', '73')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/dogs-puppies/dalmatian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubsubcate73'=>$menusubsubsubcate73,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 74
Route::get('buy/artworks/paintings-prints/animals/dogs-puppies/french-bulldog', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate74 = DB::table('subsubsubcategories')->where('ssscid','74')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '51')->where('subsubsubcat_id', '74')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/dogs-puppies/french-bulldog')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubsubcate74'=>$menusubsubsubcate74,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 75
Route::get('buy/artworks/paintings-prints/animals/dogs-puppies/pug', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES

		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate75 = DB::table('subsubsubcategories')->where('ssscid','75')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '51')->where('subsubsubcat_id', '75')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/dogs-puppies/pug')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubsubcate75'=>$menusubsubsubcate75,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 76
Route::get('buy/artworks/paintings-prints/animals/dogs-puppies/other-dogs-puppies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate51 = DB::table('subsubcategories')->where('sscid','51')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate76 = DB::table('subsubsubcategories')->where('ssscid','76')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '51')->where('subsubsubcat_id', '76')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/dogs-puppies/other-dogs-puppies')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate51'=>$menusubsubcate51,
											   'menusubsubsubcate76'=>$menusubsubsubcate76,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 77
Route::get('buy/artworks/paintings-prints/animals/farm-animals/chickens', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate52 = DB::table('subsubcategories')->where('sscid','52')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate77 = DB::table('subsubsubcategories')->where('ssscid','77')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '52')->where('subsubsubcat_id', '77')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/farm-animals/chickens')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate52'=>$menusubsubcate52,
											   'menusubsubsubcate77'=>$menusubsubsubcate77,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 78
Route::get('buy/artworks/paintings-prints/animals/farm-animals/cows-bulls', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate52 = DB::table('subsubcategories')->where('sscid','52')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate78 = DB::table('subsubsubcategories')->where('ssscid','78')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '52')->where('subsubsubcat_id', '78')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/farm-animals/cows-bulls')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate52'=>$menusubsubcate52,
											   'menusubsubsubcate78'=>$menusubsubsubcate78,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 79
Route::get('buy/artworks/paintings-prints/animals/farm-animals/sheep', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate52 = DB::table('subsubcategories')->where('sscid','52')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate79 = DB::table('subsubsubcategories')->where('ssscid','79')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '52')->where('subsubsubcat_id', '78')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/farm-animals/sheep')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate52'=>$menusubsubcate52,
											   'menusubsubsubcate79'=>$menusubsubsubcate79,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 80
Route::get('buy/artworks/paintings-prints/animals/farm-animals/other-farm-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate19 = DB::table('subcategories')->where('scid','19')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate52 = DB::table('subsubcategories')->where('sscid','52')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate80 = DB::table('subsubsubcategories')->where('ssscid','80')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '19')->where('subsubcat_id', '52')->where('subsubsubcat_id', '80')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/animals/farm-animals/other-farm-animals')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate19'=>$menusubcate19,
											   'menusubsubcate52'=>$menusubsubcate52,
											   'menusubsubsubcate80'=>$menusubsubsubcate80,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 81
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers/lilies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate81 = DB::table('subsubsubcategories')->where('ssscid','81')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->where('subsubsubcat_id', '81')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers/lilies')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate81'=>$menusubsubsubcate81,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 82
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers/roses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate82 = DB::table('subsubsubcategories')->where('ssscid','82')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->where('subsubsubcat_id', '82')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers/roses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate82'=>$menusubsubsubcate82,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 83
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers/tulips', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate83 = DB::table('subsubsubcategories')->where('ssscid','83')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->where('subsubsubcat_id', '83')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers/tulips')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate83'=>$menusubsubsubcate83,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 84
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers/wisteria', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate84 = DB::table('subsubsubcategories')->where('ssscid','84')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->where('subsubsubcat_id', '84')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers/wisteria')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate84'=>$menusubsubsubcate84,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 85
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers/angelica', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate85 = DB::table('subsubsubcategories')->where('ssscid','85')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->where('subsubsubcat_id', '85')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers/angelica')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate85'=>$menusubsubsubcate85,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 86
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/flowers/other-flowers', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate54 = DB::table('subsubcategories')->where('sscid','54')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate86 = DB::table('subsubsubcategories')->where('ssscid','86')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '54')->where('subsubsubcat_id', '86')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/flowers/other-flowers')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate54'=>$menusubsubcate54,
											   'menusubsubsubcate86'=>$menusubsubsubcate86,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 87
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/plants/acorns', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate55 = DB::table('subsubcategories')->where('sscid','55')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate87 = DB::table('subsubsubcategories')->where('ssscid','87')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '55')->where('subsubsubcat_id', '87')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/plants/acorns')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate55'=>$menusubsubcate55,
											   'menusubsubsubcate87'=>$menusubsubsubcate87,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 88
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/plants/cactus-cacti', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate55 = DB::table('subsubcategories')->where('sscid','55')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate88 = DB::table('subsubsubcategories')->where('ssscid','88')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '55')->where('subsubsubcat_id', '88')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/plants/cactus-cacti')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate55'=>$menusubsubcate55,
											   'menusubsubsubcate88'=>$menusubsubsubcate88,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 89
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/plants/grasses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate55 = DB::table('subsubcategories')->where('sscid','55')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate89 = DB::table('subsubsubcategories')->where('ssscid','89')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '55')->where('subsubsubcat_id', '89')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/plants/grasses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate55'=>$menusubsubcate55,
											   'menusubsubsubcate89'=>$menusubsubsubcate89,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 90
Route::get('buy/artworks/paintings-prints/flowers-plants-trees/plants/other-plants', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate20 = DB::table('subcategories')->where('scid','20')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate55 = DB::table('subsubcategories')->where('sscid','55')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate90 = DB::table('subsubsubcategories')->where('ssscid','90')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '20')->where('subsubcat_id', '55')->where('subsubsubcat_id', '90')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/flowers-plants-trees/plants/other-plants')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate20'=>$menusubcate20,
											   'menusubsubcate55'=>$menusubsubcate55,
											   'menusubsubsubcate90'=>$menusubsubsubcate90,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 91
Route::get('buy/artworks/paintings-prints/people-figures/celebrity/actors', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate57 = DB::table('subsubcategories')->where('sscid','57')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate91 = DB::table('subsubsubcategories')->where('ssscid','91')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '57')->where('subsubsubcat_id', '91')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/celebrity/actors')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate57'=>$menusubsubcate57,
											   'menusubsubsubcate91'=>$menusubsubsubcate91,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 92
Route::get('buy/artworks/paintings-prints/people-figures/celebrity/actresses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate57 = DB::table('subsubcategories')->where('sscid','57')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate92 = DB::table('subsubsubcategories')->where('ssscid','92')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '57')->where('subsubsubcat_id', '92')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/celebrity/actresses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate57'=>$menusubsubcate57,
											   'menusubsubsubcate92'=>$menusubsubsubcate92,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 93
Route::get('buy/artworks/paintings-prints/people-figures/celebrity/musicians', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate57 = DB::table('subsubcategories')->where('sscid','57')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate93 = DB::table('subsubsubcategories')->where('ssscid','93')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '57')->where('subsubsubcat_id', '93')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/celebrity/musicians')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate57'=>$menusubsubcate57,
											   'menusubsubsubcate93'=>$menusubsubsubcate93,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 94
Route::get('buy/artworks/paintings-prints/people-figures/celebrity/other-celebrity', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate57 = DB::table('subsubcategories')->where('sscid','57')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate94 = DB::table('subsubsubcategories')->where('ssscid','94')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '57')->where('subsubsubcat_id', '94')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/celebrity/other-celebrity')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate57'=>$menusubsubcate57,
											   'menusubsubsubcate94'=>$menusubsubsubcate94,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 95
Route::get('buy/artworks/paintings-prints/people-figures/animation-anime-comics/animation', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate59 = DB::table('subsubcategories')->where('sscid','59')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate95 = DB::table('subsubsubcategories')->where('ssscid','95')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '59')->where('subsubsubcat_id', '95')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/animation-anime-comics/animation')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate59'=>$menusubsubcate59,
											   'menusubsubsubcate95'=>$menusubsubsubcate95,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 96
Route::get('buy/artworks/paintings-prints/people-figures/animation-anime-comics/anime', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate59 = DB::table('subsubcategories')->where('sscid','59')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate96 = DB::table('subsubsubcategories')->where('ssscid','96')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '59')->where('subsubsubcat_id', '96')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/animation-anime-comics/anime')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate59'=>$menusubsubcate59,
											   'menusubsubsubcate96'=>$menusubsubsubcate96,
											   'menu1'=>$menu1
											   ));		
});	


// SUB-SUB-SUB-CATEGORY 97
Route::get('buy/artworks/paintings-prints/people-figures/animation-anime-comics/comics', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate59 = DB::table('subsubcategories')->where('sscid','59')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate97 = DB::table('subsubsubcategories')->where('ssscid','97')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '59')->where('subsubsubcat_id', '97')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/animation-anime-comics/comics')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate59'=>$menusubsubcate59,
											   'menusubsubsubcate97'=>$menusubsubsubcate97,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 98
Route::get('buy/artworks/paintings-prints/people-figures/animation-anime-comics/others', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate59 = DB::table('subsubcategories')->where('sscid','59')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate98 = DB::table('subsubsubcategories')->where('ssscid','98')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '59')->where('subsubsubcat_id', '98')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/animation-anime-comics/others')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate59'=>$menusubsubcate59,
											   'menusubsubsubcate98'=>$menusubsubsubcate98,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 99
Route::get('buy/artworks/paintings-prints/people-figures/occupations/actor', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate99 = DB::table('subsubsubcategories')->where('ssscid','99')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->where('subsubsubcat_id', '99')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations/actor')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate99'=>$menusubsubsubcate99,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 100
Route::get('buy/artworks/paintings-prints/people-figures/occupations/astronaut', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate100 = DB::table('subsubsubcategories')->where('ssscid','100')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->where('subsubsubcat_id', '100')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations/astronaut')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate100'=>$menusubsubsubcate100,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 101
Route::get('buy/artworks/paintings-prints/people-figures/occupations/chef', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate101 = DB::table('subsubsubcategories')->where('ssscid','101')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->where('subsubsubcat_id', '101')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations/chef')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate101'=>$menusubsubsubcate101,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 102
Route::get('buy/artworks/paintings-prints/people-figures/occupations/doctor-dentists', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate102 = DB::table('subsubsubcategories')->where('ssscid','102')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->where('subsubsubcat_id', '102')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations/doctor-dentists')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate102'=>$menusubsubsubcate102,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 103
Route::get('buy/artworks/paintings-prints/people-figures/occupations/musician', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate103 = DB::table('subsubsubcategories')->where('ssscid','103')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->where('subsubsubcat_id', '103')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations/musician')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate103'=>$menusubsubsubcate103,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 104
Route::get('buy/artworks/paintings-prints/people-figures/occupations/other-occupations', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate60 = DB::table('subsubcategories')->where('sscid','60')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate104 = DB::table('subsubsubcategories')->where('ssscid','104')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '60')->where('subsubsubcat_id', '104')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/occupations/other-occupations')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate60'=>$menusubsubcate60,
											   'menusubsubsubcate104'=>$menusubsubsubcate104,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 105
Route::get('buy/artworks/paintings-prints/people-figures/potrait/female', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate61 = DB::table('subsubcategories')->where('sscid','61')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate105 = DB::table('subsubsubcategories')->where('ssscid','105')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '61')->where('subsubsubcat_id', '105')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/potrait/female')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate61'=>$menusubsubcate61,
											   'menusubsubsubcate105'=>$menusubsubsubcate105,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 106
Route::get('buy/artworks/paintings-prints/people-figures/potrait/male', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate61 = DB::table('subsubcategories')->where('sscid','61')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate106 = DB::table('subsubsubcategories')->where('ssscid','106')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '61')->where('subsubsubcat_id', '106')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/potrait/male')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate61'=>$menusubsubcate61,
											   'menusubsubsubcate106'=>$menusubsubsubcate106,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 107
Route::get('buy/artworks/paintings-prints/people-figures/potrait/couples', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate61 = DB::table('subsubcategories')->where('sscid','61')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate107 = DB::table('subsubsubcategories')->where('ssscid','107')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '61')->where('subsubsubcat_id', '107')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/potrait/couples')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate61'=>$menusubsubcate61,
											   'menusubsubsubcate107'=>$menusubsubsubcate107,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 108
Route::get('buy/artworks/paintings-prints/people-figures/potrait/other-potrait', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate21 = DB::table('subcategories')->where('scid','21')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate61 = DB::table('subsubcategories')->where('sscid','61')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate108 = DB::table('subsubsubcategories')->where('ssscid','108')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '21')->where('subsubcat_id', '61')->where('subsubsubcat_id', '108')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/people-figures/potrait/other-potrait')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate21'=>$menusubcate21,
											   'menusubsubcate61'=>$menusubsubcate61,
											   'menusubsubsubcate108'=>$menusubsubsubcate108,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 109
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/yoruba-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate109 = DB::table('subsubsubcategories')->where('ssscid','109')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '109')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/yoruba-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate109'=>$menusubsubsubcate109,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 110
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/igbo-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate110 = DB::table('subsubsubcategories')->where('ssscid','110')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '110')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/igbo-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate110'=>$menusubsubsubcate110,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 111
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/hausa-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate111 = DB::table('subsubsubcategories')->where('ssscid','111')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '111')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/hausa-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate111'=>$menusubsubsubcate111,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 112
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/fulani-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate112 = DB::table('subsubsubcategories')->where('ssscid','112')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '112')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/fulani-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate112'=>$menusubsubsubcate112,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 113
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/ibibio-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate113 = DB::table('subsubsubcategories')->where('ssscid','113')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '113')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/ibibio-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate113'=>$menusubsubsubcate113,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 114
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/tiv-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate114 = DB::table('subsubsubcategories')->where('ssscid','114')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '114')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/tiv-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate114'=>$menusubsubsubcate114,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 115
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/nigerian-textiles-paintings', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate115 = DB::table('subsubsubcategories')->where('ssscid','115')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '115')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/nigerian-textiles-paintings')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate115'=>$menusubsubsubcate115,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 116
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/nigerian-tribal-masks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate116 = DB::table('subsubsubcategories')->where('ssscid','116')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '116')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/nigerian-tribal-masks')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate116'=>$menusubsubsubcate116,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 117
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/other-nigerian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate62 = DB::table('subsubcategories')->where('sscid','62')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate117 = DB::table('subsubsubcategories')->where('ssscid','117')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '62')->where('subsubsubcat_id', '117')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/nigerian/other-nigerian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate62'=>$menusubsubcate62,
											   'menusubsubsubcate117'=>$menusubsubsubcate117,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 118
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/african-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate63 = DB::table('subsubcategories')->where('sscid','63')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate118 = DB::table('subsubsubcategories')->where('ssscid','118')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '63')->where('subsubsubcat_id', '118')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/african-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate63'=>$menusubsubcate63,
											   'menusubsubsubcate118'=>$menusubsubsubcate118,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 119
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/african-textiles-paintings', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate63 = DB::table('subsubcategories')->where('sscid','63')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate119 = DB::table('subsubsubcategories')->where('ssscid','119')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '63')->where('subsubsubcat_id', '119')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/african-textiles-paintings')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate63'=>$menusubsubcate63,
											   'menusubsubsubcate119'=>$menusubsubsubcate119,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 120
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/african-tribal-masks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate63 = DB::table('subsubcategories')->where('sscid','63')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate120 = DB::table('subsubsubcategories')->where('ssscid','120')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '63')->where('subsubsubcat_id', '120')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/african-tribal-masks')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate63'=>$menusubsubcate63,
											   'menusubsubsubcate120'=>$menusubsubsubcate120,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 121
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/other-african', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate63 = DB::table('subsubcategories')->where('sscid','63')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate121 = DB::table('subsubsubcategories')->where('ssscid','121')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '63')->where('subsubsubcat_id', '121')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/african/other-african')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate63'=>$menusubsubcate63,
											   'menusubsubsubcate121'=>$menusubsubsubcate121,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 122
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate122 = DB::table('subsubsubcategories')->where('ssscid','122')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '66')->where('subsubsubcat_id', '122')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubsubcate122'=>$menusubsubsubcate122,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 123
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/chinese', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate123 = DB::table('subsubsubcategories')->where('ssscid','123')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '66')->where('subsubsubcat_id', '123')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/chinese')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubsubcate123'=>$menusubsubsubcate123,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 124
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/japanese', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate124 = DB::table('subsubsubcategories')->where('ssscid','124')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '66')->where('subsubsubcat_id', '124')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/japanese')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubsubcate124'=>$menusubsubsubcate124,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 125
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/thai', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate125 = DB::table('subsubsubcategories')->where('ssscid','125')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '66')->where('subsubsubcat_id', '125')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/thai')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubsubcate125'=>$menusubsubsubcate125,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 126
Route::get('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/other-asian-indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate22 = DB::table('subcategories')->where('scid','22')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate66 = DB::table('subsubcategories')->where('sscid','66')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate126 = DB::table('subsubsubcategories')->where('ssscid','126')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '3')->where('subcat_id', '22')->where('subsubcat_id', '66')->where('subsubsubcat_id', '126')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/paintings-prints/ethnic-cultural-tribal/asian-indian/other-asian-indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate3'=>$menucate3,
											   'menusubcate22'=>$menusubcate22,
											   'menusubsubcate66'=>$menusubsubcate66,
											   'menusubsubsubcate126'=>$menusubsubsubcate126,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 127
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life/dolphins', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate127 = DB::table('subsubsubcategories')->where('ssscid','127')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->where('subsubsubcat_id', '127')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life/dolphins')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate127'=>$menusubsubsubcate127,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 128
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life/fish', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate128 = DB::table('subsubsubcategories')->where('ssscid','128')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->where('subsubsubcat_id', '128')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life/fish')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate128'=>$menusubsubsubcate128,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 129
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life/manatee', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate129 = DB::table('subsubsubcategories')->where('ssscid','129')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->where('subsubsubcat_id', '129')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life/manatee')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate129'=>$menusubsubsubcate129,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 130
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life/seals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate130 = DB::table('subsubsubcategories')->where('ssscid','130')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->where('subsubsubcat_id', '130')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life/seals')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate130'=>$menusubsubsubcate130,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 131
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life/crustaceans', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate131 = DB::table('subsubsubcategories')->where('ssscid','131')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->where('subsubsubcat_id', '131')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life/crustaceans')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate131'=>$menusubsubsubcate131,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 132
Route::get('buy/artworks/drawings-illustration/animals/aquatic-life/other-aquatic-life', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate96 = DB::table('subsubcategories')->where('sscid','96')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate132 = DB::table('subsubsubcategories')->where('ssscid','132')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '96')->where('subsubsubcat_id', '132')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/aquatic-life/other-aquatic-life')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate96'=>$menusubsubcate96,
											   'menusubsubsubcate132'=>$menusubsubsubcate132,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 133
Route::get('buy/artworks/drawings-illustration/animals/birds/eagles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate133 = DB::table('subsubsubcategories')->where('ssscid','133')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->where('subsubsubcat_id', '133')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds/eagles')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate133'=>$menusubsubsubcate133,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 134
Route::get('buy/artworks/drawings-illustration/animals/birds/flamingo', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate134 = DB::table('subsubsubcategories')->where('ssscid','134')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->where('subsubsubcat_id', '134')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds/flamingo')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate134'=>$menusubsubsubcate134,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 135
Route::get('buy/artworks/drawings-illustration/animals/birds/ducks-loons', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate135 = DB::table('subsubsubcategories')->where('ssscid','135')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->where('subsubsubcat_id', '135')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds/ducks-loons')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate135'=>$menusubsubsubcate135,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 136
Route::get('buy/artworks/drawings-illustration/animals/birds/hawk', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate136 = DB::table('subsubsubcategories')->where('ssscid','136')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->where('subsubsubcat_id', '136')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds/hawk')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate136'=>$menusubsubsubcate136,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 137
Route::get('buy/artworks/drawings-illustration/animals/birds/peacock', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate137 = DB::table('subsubsubcategories')->where('ssscid','137')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->where('subsubsubcat_id', '137')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds/peacock')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate137'=>$menusubsubsubcate137,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 138
Route::get('buy/artworks/drawings-illustration/animals/birds/other-birds', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate97 = DB::table('subsubcategories')->where('sscid','97')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate138 = DB::table('subsubsubcategories')->where('ssscid','138')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '97')->where('subsubsubcat_id', '138')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/birds/other-birds')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate97'=>$menusubsubcate97,
											   'menusubsubsubcate138'=>$menusubsubsubcate138,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 139
Route::get('buy/artworks/drawings-illustration/animals/insect-bugs/ant', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate139 = DB::table('subsubsubcategories')->where('ssscid','139')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '98')->where('subsubsubcat_id', '139')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/insect-bugs/ant')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubsubcate139'=>$menusubsubsubcate139,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 140
Route::get('buy/artworks/drawings-illustration/animals/insect-bugs/bee-wasp', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate140 = DB::table('subsubsubcategories')->where('ssscid','140')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '98')->where('subsubsubcat_id', '140')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/insect-bugs/bee-wasp')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubsubcate140'=>$menusubsubsubcate140,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 141
Route::get('buy/artworks/drawings-illustration/animals/insect-bugs/dragonfly', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate141 = DB::table('subsubsubcategories')->where('ssscid','141')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '98')->where('subsubsubcat_id', '141')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/insect-bugs/dragonfly')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubsubcate141'=>$menusubsubsubcate141,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 142
Route::get('buy/artworks/drawings-illustration/animals/insect-bugs/beetles', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate142 = DB::table('subsubsubcategories')->where('ssscid','142')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '98')->where('subsubsubcat_id', '142')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/insect-bugs/beetles')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubsubcate142'=>$menusubsubsubcate142,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 143
Route::get('buy/artworks/drawings-illustration/animals/insect-bugs/other-insect-bugs', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate98 = DB::table('subsubcategories')->where('sscid','98')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate143 = DB::table('subsubsubcategories')->where('ssscid','143')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '98')->where('subsubsubcat_id', '143')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/insect-bugs/other-insect-bugs')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate98'=>$menusubsubcate98,
											   'menusubsubsubcate143'=>$menusubsubsubcate143,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 144
Route::get('buy/artworks/drawings-illustration/animals/dogs-puppies/akita', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate144 = DB::table('subsubsubcategories')->where('ssscid','144')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '99')->where('subsubsubcat_id', '144')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/dogs-puppies/akita')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubsubcate144'=>$menusubsubsubcate144,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 145
Route::get('buy/artworks/drawings-illustration/animals/dogs-puppies/dalmatian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate145 = DB::table('subsubsubcategories')->where('ssscid','145')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '99')->where('subsubsubcat_id', '145')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/dogs-puppies/dalmatian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubsubcate145'=>$menusubsubsubcate145,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 146
Route::get('buy/artworks/drawings-illustration/animals/dogs-puppies/french-bulldog', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate146 = DB::table('subsubsubcategories')->where('ssscid','146')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '99')->where('subsubsubcat_id', '146')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/dogs-puppies/french-bulldog')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubsubcate146'=>$menusubsubsubcate146,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 147
Route::get('buy/artworks/drawings-illustration/animals/dogs-puppies/pug', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate147 = DB::table('subsubsubcategories')->where('ssscid','147')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '99')->where('subsubsubcat_id', '147')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/dogs-puppies/pug')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubsubcate147'=>$menusubsubsubcate147,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 148
Route::get('buy/artworks/drawings-illustration/animals/dogs-puppies/other-dogs-puppies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate99 = DB::table('subsubcategories')->where('sscid','99')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate148 = DB::table('subsubsubcategories')->where('ssscid','148')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '99')->where('subsubsubcat_id', '148')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/dogs-puppies/other-dogs-puppies')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate99'=>$menusubsubcate99,
											   'menusubsubsubcate148'=>$menusubsubsubcate148,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 149
Route::get('buy/artworks/drawings-illustration/animals/farm-animals/chickens', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate100 = DB::table('subsubcategories')->where('sscid','100')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate149 = DB::table('subsubsubcategories')->where('ssscid','149')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '100')->where('subsubsubcat_id', '149')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/farm-animals/chickens')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate100'=>$menusubsubcate100,
											   'menusubsubsubcate149'=>$menusubsubsubcate149,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 150
Route::get('buy/artworks/drawings-illustration/animals/farm-animals/cows-bulls', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate100 = DB::table('subsubcategories')->where('sscid','100')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate150 = DB::table('subsubsubcategories')->where('ssscid','150')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '100')->where('subsubsubcat_id', '150')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/farm-animals/cows-bulls')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate100'=>$menusubsubcate100,
											   'menusubsubsubcate150'=>$menusubsubsubcate150,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 151
Route::get('buy/artworks/drawings-illustration/animals/farm-animals/sheep', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate100 = DB::table('subsubcategories')->where('sscid','100')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate151 = DB::table('subsubsubcategories')->where('ssscid','151')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '100')->where('subsubsubcat_id', '151')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/farm-animals/sheep')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate100'=>$menusubsubcate100,
											   'menusubsubsubcate151'=>$menusubsubsubcate151,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 152
Route::get('buy/artworks/drawings-illustration/animals/farm-animals/other-farm-animals', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate35 = DB::table('subcategories')->where('scid','35')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate100 = DB::table('subsubcategories')->where('sscid','100')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate152 = DB::table('subsubsubcategories')->where('ssscid','152')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '35')->where('subsubcat_id', '100')->where('subsubsubcat_id', '152')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/animals/farm-animals/other-farm-animals')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate35'=>$menusubcate35,
											   'menusubsubcate100'=>$menusubsubcate100,
											   'menusubsubsubcate152'=>$menusubsubsubcate152,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 153
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/yoruba-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate153 = DB::table('subsubsubcategories')->where('ssscid','153')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '153')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/yoruba-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate153'=>$menusubsubsubcate153,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 154
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/igbo-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate154 = DB::table('subsubsubcategories')->where('ssscid','154')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '154')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/igbo-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate154'=>$menusubsubsubcate154,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 155
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/hausa-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate155 = DB::table('subsubsubcategories')->where('ssscid','155')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '155')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/hausa-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate155'=>$menusubsubsubcate155,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 156
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/fulani-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate156 = DB::table('subsubsubcategories')->where('ssscid','156')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '156')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/fulani-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate156'=>$menusubsubsubcate156,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 157
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/ibibio-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate157 = DB::table('subsubsubcategories')->where('ssscid','157')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '157')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/ibibio-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate157'=>$menusubsubsubcate157,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 158
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/tiv-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();

		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate158 = DB::table('subsubsubcategories')->where('ssscid','158')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '158')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/tiv-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate158'=>$menusubsubsubcate158,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 159
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/nigerian-textiles-drawings', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate159 = DB::table('subsubsubcategories')->where('ssscid','159')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '159')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/nigerian-textiles-drawings')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate159'=>$menusubsubsubcate159,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 160
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/nigerian-tribal-masks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate160 = DB::table('subsubsubcategories')->where('ssscid','160')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '160')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/nigerian-tribal-masks')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate160'=>$menusubsubsubcate160,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 161
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/other-nigerian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate102 = DB::table('subsubcategories')->where('sscid','102')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate161 = DB::table('subsubsubcategories')->where('ssscid','161')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '102')->where('subsubsubcat_id', '161')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/nigerian/other-nigerian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate102'=>$menusubsubcate102,
											   'menusubsubsubcate161'=>$menusubsubsubcate161,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 162
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/african-society-people', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate103 = DB::table('subsubcategories')->where('sscid','103')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate162 = DB::table('subsubsubcategories')->where('ssscid','162')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '103')->where('subsubsubcat_id', '162')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/african-society-people')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate103'=>$menusubsubcate103,
											   'menusubsubsubcate162'=>$menusubsubsubcate162,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 163
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/african-textiles-drawings', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate103 = DB::table('subsubcategories')->where('sscid','103')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate163 = DB::table('subsubsubcategories')->where('ssscid','163')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '103')->where('subsubsubcat_id', '163')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/african-textiles-drawings')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate103'=>$menusubsubcate103,
											   'menusubsubsubcate163'=>$menusubsubsubcate163,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 164
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/african-tribal-masks', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate103 = DB::table('subsubcategories')->where('sscid','103')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate164 = DB::table('subsubsubcategories')->where('ssscid','164')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '103')->where('subsubsubcat_id', '164')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/african-tribal-masks')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate103'=>$menusubsubcate103,
											   'menusubsubsubcate164'=>$menusubsubsubcate164,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 165
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/other-african', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate103 = DB::table('subsubcategories')->where('sscid','103')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate165 = DB::table('subsubsubcategories')->where('ssscid','165')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '103')->where('subsubsubcat_id', '165')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/african/other-african')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate103'=>$menusubsubcate103,
											   'menusubsubsubcate165'=>$menusubsubsubcate165,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 166
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate166 = DB::table('subsubsubcategories')->where('ssscid','166')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '105')->where('subsubsubcat_id', '166')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubsubcate166'=>$menusubsubsubcate166,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 167
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/chinese', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate167 = DB::table('subsubsubcategories')->where('ssscid','167')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '105')->where('subsubsubcat_id', '167')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/chinese')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubsubcate167'=>$menusubsubsubcate167,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 168
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/japanese', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate168 = DB::table('subsubsubcategories')->where('ssscid','168')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '105')->where('subsubsubcat_id', '168')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/japanese')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubsubcate168'=>$menusubsubsubcate168,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 169
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/thai', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate169 = DB::table('subsubsubcategories')->where('ssscid','169')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '105')->where('subsubsubcat_id', '169')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/thai')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubsubcate169'=>$menusubsubsubcate169,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 170
Route::get('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/other-asian-indian', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate36 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate105 = DB::table('subsubcategories')->where('sscid','105')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate170 = DB::table('subsubsubcategories')->where('ssscid','170')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '36')->where('subsubcat_id', '105')->where('subsubsubcat_id', '170')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/ethnic-cultural-tribal/asian-indian/other-asian-indian')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate36'=>$menusubcate36,
											   'menusubsubcate105'=>$menusubsubcate105,
											   'menusubsubsubcate170'=>$menusubsubsubcate170,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 171
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/lilies', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate171 = DB::table('subsubsubcategories')->where('ssscid','171')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->where('subsubsubcat_id', '171')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/lilies')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate171'=>$menusubsubsubcate171,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 172
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/roses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate172 = DB::table('subsubsubcategories')->where('ssscid','172')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->where('subsubsubcat_id', '172')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/roses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate172'=>$menusubsubsubcate172,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 173
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/tulips', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate173 = DB::table('subsubsubcategories')->where('ssscid','173')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->where('subsubsubcat_id', '173')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/tulips')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate173'=>$menusubsubsubcate173,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 174
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/wisteria', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate174 = DB::table('subsubsubcategories')->where('ssscid','174')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->where('subsubsubcat_id', '174')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/wisteria')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate174'=>$menusubsubsubcate174,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 175
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/angelica', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate175 = DB::table('subsubsubcategories')->where('ssscid','175')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->where('subsubsubcat_id', '175')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/angelica')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate175'=>$menusubsubsubcate175,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 176
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/other-flowers', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate111 = DB::table('subsubcategories')->where('sscid','111')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate176 = DB::table('subsubsubcategories')->where('ssscid','176')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '111')->where('subsubsubcat_id', '176')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/flowers/other-flowers')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate111'=>$menusubsubcate111,
											   'menusubsubsubcate176'=>$menusubsubsubcate176,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 177
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/plants/acorns', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate112 = DB::table('subsubcategories')->where('sscid','112')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate177 = DB::table('subsubsubcategories')->where('ssscid','177')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '112')->where('subsubsubcat_id', '177')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/plants/acorns')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate112'=>$menusubsubcate112,
											   'menusubsubsubcate177'=>$menusubsubsubcate177,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 178
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/plants/cactus-cacti', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate112 = DB::table('subsubcategories')->where('sscid','112')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate178 = DB::table('subsubsubcategories')->where('ssscid','178')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '112')->where('subsubsubcat_id', '178')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/plants/cactus-cacti')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate112'=>$menusubsubcate112,
											   'menusubsubsubcate178'=>$menusubsubsubcate178,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 179
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/plants/grasses', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate112 = DB::table('subsubcategories')->where('sscid','112')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate179 = DB::table('subsubsubcategories')->where('ssscid','179')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '112')->where('subsubsubcat_id', '179')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/plants/grasses')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate112'=>$menusubsubcate112,
											   'menusubsubsubcate179'=>$menusubsubsubcate179,
											   'menu1'=>$menu1
											   ));		
});


// SUB-SUB-SUB-CATEGORY 180
Route::get('buy/artworks/drawings-illustration/flowers-plants-trees/plants/other-plants', function()
{
	      //GETS CATEGORYTYPE
		  $menutype1 = DB::table('categorytype')->where('ctid','1')->get();
		  
		  //GETS CATEGORY
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  
		  // GETS SUBCATEGORIES
		  $menusubcate37 = DB::table('subcategories')->where('scid','36')->get();
		  
		  // GETS SUBSUBCATEGORIES
		  $menusubsubcate112 = DB::table('subsubcategories')->where('sscid','112')->get();
		  
		  // GETS SUBSUBSUBCATEGORIES
		   $menusubsubsubcate180 = DB::table('subsubsubcategories')->where('ssscid','180')->get();


		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		 
		 		
	 		//$arts = DB::table('arts')->orderBy(DB::raw('RAND()'))->paginate(12);
			$arts= DB::table('arts')->where('cattype_id', '1')->where('cat_id', '5')->where('subcat_id', '37')->where('subsubcat_id', '112')->where('subsubsubcat_id', '180')->orderBy(DB::raw('RAND()'))->paginate(9);
	 
	 		$contents = Cart::content();
			$carttotal = Cart::total();
	

											   
		return view('buy/artworks/drawings-illustration/flowers-plants-trees/plants/other-plants')->with(
												array('cart_content'=>$contents,
											   'carttotal'=>$carttotal,
											   'arts'=>$arts,
											   'menutype1'=>$menutype1,
											   'menucate5'=>$menucate5,
											   'menusubcate37'=>$menusubcate37,
											   'menusubsubcate112'=>$menusubsubcate112,
											   'menusubsubsubcate180'=>$menusubsubsubcate180,
											   'menu1'=>$menu1
											   ));		
});




	
										/*  END SUB-SUB-SUB-CATEGORIES   */
										
										

Route::get('selected-art/{subsubsubcat_id}/{artid}', function($subsubsubcat_id,$artid)
{
	$artId=$artid;
	$subsubsubcatId=$subsubsubcat_id;
	
	$table = 'arts';
	
		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		
	
	//you may also like arts
	
	$relatedarts = DB::table($table)->where('subsubsubcat_id',$subsubsubcatId)->orderBy(DB::raw('RAND()'))->paginate(4);

	$art_details = DB::table($table)->where('aid', $artId)->first();
	$artist_details =  DB::table('users')->where('uid',$art_details->user_id)->first();
	
	$contents = Cart::content();
	$carttotal = Cart::total();
	
   return view('selected-art')->with(array('cart_content'=>$contents,
   													 'carttotal'=>$carttotal,
   												     'art_details'=>$art_details,
   													 'relatedarts'=>$relatedarts,
													 'artist_details'=>$artist_details,
													  'menu1'=>$menu1,
													   'menu2'=>$menu2
													   ));
	
});


Route::get('art/{cattype_id}/{ssscid}', function($cattype_id,$ssscid)
{
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		
	
	
	$cattypeId=$cattype_id;
	$ssscId=$ssscid;
	$table='arts';
	
	$subsubsubcat = DB::table('subsubsubcategories')->where('ssscid', '=' , $ssscId)->first();
	
   $contents = Cart::content();
   $carttotal = Cart::total();
	
	$art_details = DB::table($table)->where('cattype_id', '=' , $cattypeId)->where('subsubsubcat_id', '=' , $ssscId)->orderBy(DB::raw('RAND()'))->paginate(9);
	
	$art_detail = DB::table($table)->where('cattype_id', '=' , $cattypeId)->where('subsubsubcat_id', '=' , $ssscId)->count();
	
	if($art_detail==0){
		
		Session::flash('art_msg','There are currently no items available for this category');
		return view('art')->with(array('cart_content'=>$contents,
												 'carttotal'=>$carttotal,
												 'art_details'=>$art_details,
												 'subsubsubcat_name'=>$subsubsubcat->subsubsubcat_name,
												 'menu1'=>$menu1,
											   	 'menu2'=>$menu2
											   ));
		
		}else{

	return view('art')->with(array('cart_content'=>$contents,
											 'art_details'=>$art_details,
											 'subsubsubcat_name'=>$subsubsubcat->subsubsubcat_name,
											  'menu1'=>$menu1,
											   'menu2'=>$menu2
											  ));
		}
	
});

Route::get('home_cart', function(){
	
	  return redirect('/');
	
		});


Route::post('home_cart', function(){
	
$artwork_id = Input::get('artwork_id');
$artwork_name = Input::get('artwork_name');
$artwork_image = Input::get('image_path');
$artwork_price = Input::get('artwork_price');
$artwork_qty = Input::get('artwork_qty');
$subsubsubcat_id = Input::get('subsubsubcat_id');
$artist_id = Input::get('artist_id');
$table = 'arts';

$artistDetails = DB::table('users')->where('uid',$artist_id)->first();

	

	$artist_lastname = $artistDetails->lastname;
	$artist_firstname = $artistDetails->firstname;
	$artist_fullname = $artist_lastname .' ' .$artist_firstname;
	$artist_email = $artistDetails->email;


	Cart::add(array('id' => $artwork_id, 'name' => $artwork_name, 'qty' =>$artwork_qty, 'price' => $artwork_price, 'options' => array('artist_id' => $artist_id, 'artwork_image'=>$artwork_image, 'artist_lastname'=>$artist_lastname, 'artist_firstname'=>$artist_firstname, 'artist_name'=>$artist_fullname, 'artist_email'=>$artist_email)));
	
	return redirect('/');
	

	
	});
	


Route::get('homecart-remove/{id}', function($id)
{
	$rowId = $id;

    Cart::remove($rowId);
	
	return redirect('/');

});

Route::post('buy_now', function(){
	
$artwork_id = Input::get('artwork_id');
$artwork_name = Input::get('artwork_name');
$artwork_image = Input::get('image_path');
$artwork_price = Input::get('artwork_price');
$artwork_qty = Input::get('artwork_qty');
$subsubsubcat_id = Input::get('subsubsubcat_id');
$artist_id = Input::get('artist_id');
$table = 'arts';

$artistDetails = DB::table('users')->where('uid',$artist_id)->first();

	

	$artist_lastname = $artistDetails->lastname;
	$artist_firstname = $artistDetails->firstname;
	$artist_email = $artistDetails->email;


	Cart::add(array('id' => $artwork_id, 'name' => $artwork_name, 'qty' =>$artwork_qty, 'price' => $artwork_price, 'options' => array('artist_id' => $artist_id, 'artwork_image'=>$artwork_image, 'artist_lastname'=>$artist_lastname, 'artist_firstname'=>$artist_firstname, 'artist_email'=>$artist_email)));
	
	return redirect('view-cart');
	

	
	});


Route::post('cart', function()
{
	
$artwork_id = Input::get('artwork_id');
$artwork_name = Input::get('artwork_name');
$artwork_image = Input::get('image_path');
$artwork_price = Input::get('artwork_price');
$artwork_qty = Input::get('artwork_qty');
$subsubsubcat_id = Input::get('subsubsubcat_id');
$artist_id = Input::get('artist_id');


$table = 'arts';

//return $artist_id;

$artistDetails = DB::table('users')->where('uid',$artist_id)->first();

			$artist_lastname = $artistDetails->lastname;
			$artist_firstname = $artistDetails->firstname;
			$artist_email = $artistDetails->email;

          $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();

if(!is_numeric($artwork_qty)){
	
	return redirect("selected-art/$subsubsubcat_id/$artwork_id")->with('qty_error','number not numeric');
	
	//return ('number not numeric');
	}



    $relatedarts = DB::table($table)->where('subsubsubcat_id',$subsubsubcat_id)->orderBy(DB::raw('RAND()'))->paginate(4);

	$art_details = DB::table($table)->where('aid', $artwork_id)->first();
	
	$artist_details =  DB::table('users')->where('uid',$art_details->user_id)->first();
	
	
	Cart::add(array('id' => $artwork_id, 'name' => $artwork_name, 'qty' =>$artwork_qty, 'price' => $artwork_price, 'options' => array('artist_id' => $artist_id,'artwork_image'=>$artwork_image,'artist_lastname'=>$artist_lastname, 'artist_firstname'=>$artist_firstname,'artist_email'=>$artist_email)));
	
	
	
	$contents = Cart::content();
	$carttotal = Cart::total();

	Session::flash('cart_msg','Item added to cart');
	
	return view('selected-art')->with(array('art_details'=>$art_details,
													 'relatedarts'=>$relatedarts,
													 'artist_details'=>$artist_details,
													 'carttotal'=>$carttotal,
													 'cart_content'=>$contents,
													 'menu1'=>$menu1,
													 'menu2'=>$menu2
											   ));

  
});

Route::get('cart-remove/{subsubsubcat}/{aid}/{id}', function($subsubsubcat,$aid,$id)
{
	$subsubsubcat_id = $subsubsubcat;
	$aid = $aid;
	$rowId = $id;
	
	//return $subsubsubcat_id;

   Cart::remove($rowId);
	Session::flash('cart_msg','Item removed from cart');
	
	return redirect('selected-art/'.$subsubsubcat_id.'/'.$aid);

});

Route::get('view-cart', function()
{
     	$menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		$menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		  
		

		$contents = Cart::content();
	
		$carttotal = Cart::total();
	
	 return view('view-cart')->with(array('cart_content'=>$contents,
	 											'carttotal'=>$carttotal,
												 'menu1'=>$menu1,
											     'menu2'=>$menu2
											   ));
});


Route::get('viewcart-remove/{id}', function($id)
{
	$rowId = $id;

    Cart::remove($rowId);
	
	return redirect('view-cart');

});


Route::post('viewcart-update/{id}', function($id)
{
	$rowId = $id;
	$artwork_qty = Input::get('artwork_qty');
	
	

    Cart::update($rowId,array('qty'=>$artwork_qty));
	
	Session::flash('cartupdate_msg','Cart Item updated');
	
	return redirect('view-cart');

});

Route::post('update_cart/{id}', function($id)
{
	$rowId = $id;
	$artwork_qty = Input::get('artwork_qty');

    Cart::update($rowId, array('qty' =>$artwork_qty));
	
	Session::flash('cartupdate_msg','Cart Item updated');
	
	return redirect('view-cart');

});

Route::get('empty', function()
{
	Cart::destroy();
	return redirect('/');
	// return 'empty cart';
});






	// Customer

Route::get('/customer-login-register', function()
{
	return view('customer-login-register');
});


/*
//Customer Registration
//Route::get('/customer-login-register', 'CustomerController@showRegisterc');
//Route::post('/', 'CustomerController@doRegisterc');

//Customer Login/Logout
Route::get('/customer-login-register', 'LoginController@showRegisterc');
Route::post('/', 'LoginController@doLoginc');
Route::get('/doLogoutc', 'CustomerController@doLogoutc');
*/



Route::post('register', function()
{
	$validator = Validator::make(
        Input::all(),
		
		array(
		
		  'email' => 'required|email|unique:users',
		  'password' => 'required|min:6',
          'confirm_password' => 'required|same:password',
		  'firstname' => 'required|max:255',
		  'othername' => 'required|max:255',
		  'lastname' => 'required|max:255',
		  'customer_name' => 'required|max:255',
		  'gender' => 'required',
		  
		  )
		 
		);
	
		if ($validator->passes()){
		
       $user = new User();
	   
	  
	   $user->email=Input::get('email'); 
	   $user->password=Hash::make(Input::get('password'));
	   $user->firstname=Input::get('firstname');
	   $user->othername=Input::get('othername');
	   $user->lastname=Input::get('lastname');
	   $user->customer_name=Input::get('customer_name');
	   $user->gender=Input::get('gender');
	   $user->remember_token=Input::get('rememberToken()');
	   $user->account_type="0";
	   
	   $user->save();
	   
		return redirect('customer-login-register')->with('msg','You have successfully registered.');
		
		 
		 }else{
		   return redirect('customer-login-register')->with(
            'error',
            'Please correct the following errors:'
        )->withErrors($validator);
		
		 
		 }
});

Route::post('login', function()
{
	$validator = Validator::make(
			Input::all(),
			array(
			  'loginemail' => array('required', 'email'),
			  'password' => array('required')
				 
			)
		);
		
		
		 if ($validator->passes()){
			 
			 
			 $customerdata = array(
			'email'     => Input::get('loginemail'),
			'password'  => Input::get('password')
		);
			if (Auth::attempt($customerdata)) {
				
				// validation successful!
				// redirect them to the secure section or whatever
				$email = Input::get('loginemail');
				
				$userresults=App\User::where('email', '=', $email)->first();
				
				 Session::put('uid', $userresults->uid);
				 Session::put('firstname', $userresults->firstname);
				 Session::put('othername', $userresults->othername);
				 Session::put('lastname', $userresults->lastname);
				 Session::put('customer_name', $userresults->customer_name);
	             Session::put('email', $userresults->email);

				 
				return redirect('index');
		
			} else {        
		
				// validation not successful, send back to form 
				return redirect('customer-login-register')->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
				
				
		
			}
			
			 
		}

	
	
});	


	//Artist
	
	

	
Route::get('artist-login-register', function()
{
	$country = DB::table('country')->lists('country','country_id');
	
	return view('artist-login-register')->with(array('country'=>$country));
});


Route::get('state', function()
{
	$country_id = Input::get('country_id');
	$resultset = DB::table('state')->where('country_id', '=', $country_id)->get();
	
	return $resultset;
	
});


Route::post('artist-signup', function()
{
	 //return 'register here';
	$validator = Validator::make(
        Input::all(),
        array(
		  'firstname' => 'required|max:255',
		  'othername' => 'required|max:255',
		  'lastname'  => 'required|max:255',
		  'artist_name' => 'required|max:255',
		  'email' 	  => 'required|email|unique:users',
		  'password'  => 'required|min:6',
          'confirm_password' => 'required|same:password',
		  'gender' 	  => 'required',
         'country' 	  => 'required',
		 'state' 	  => 'required',
		 'city' 	  => 'required',
		 'address' 	  => 'required',
		  'phone' 	  => 'required',
		 
        )
    );
	
	 //return 'hello';
	
	 if ($validator->passes()){
		 
		
		$artists=App\User::where('account_type', '=', '1')->get();
		
		
		
       $user=new User();
	   
	  
	   $user->firstname=Input::get('firstname');
	   $user->othername=Input::get('othername');
	   $user->lastname=Input::get('lastname');
	   $user->artist_name=Input::get('artist_name');
	   $user->email=Input::get('email'); 
	   $user->password=Hash::make(Input::get('password'));
	   $user->gender=Input::get('gender'); 
	    
	   $artist_country = DB::table('country')->where('country_id', Input::get('country'))->first();
	   $artist_state = DB::table('state')->where('state_id', Input::get('state'))->first();
	   
	   $user->country=$artist_country->country;
	   $user->state=$artist_state->state;
	   
	   $user->city=Input::get('city');
	   $user->address=Input::get('address');
	   $user->phone=Input::get('phone');
	   $user->active="0";
	   $user->account_type="1";
	   
	   $user->save();
	   
	   
	   $firstname=Input::get('firstname');
	   $other=Input::get('othername');
	   $lastname=Input::get('lastname');
	   $artist_name = Input::get('artist_name');
	   $email = Input::get('email');
	   $gender = Input::get('gender');
	   $country=$artist_country->country; 
	   $state=$artist_state->state;
	   $city=Input::get('city');
	   $address = Input::get('address');
	   $phone = Input::get('phone');
	   
	   $full_details = array($firstname,$lastname,$artist_name,$email,$gender,$country,$state,$city,$address,$phone);
	   
	  
	   $admin_email = "yimicsidris@live.com";
	   $admin = array('admin_email'=>$admin_email);
		 
		/*Mail::send('emails.artistRegister',array('full_details'=> $full_details), function($message) use ($admin)
		{
		  $message->to($admin['admin_email'], 'Admin')->to('yimicsidris@live.com', 'Admin')->subject('Yarth New Artist Registration!');
				 
		});*/
	  
      Session::flash('msg', 'Registration successful! Please wait for activation via your email, this might take some time. Thanks');
	  
		 return redirect('artist-login-register');
		
		 
		 }else{
		   return redirect('artist-login-register')->with(
            'error',
            'Please correct the following errors:'
        )->withErrors($validator);
		
		 
		 }
	
});


Route::post('artist-login', function()
{
	
	$validator = Validator::make(
			Input::all(),
			array(
			  'loginemail' => array('required', 'email'),
			  'password' => array('required')
				 
			)
		);
		
		
		 if ($validator->passes()){
			 
			 
			 $artistdata = array(
			'email'     => Input::get('loginemail'),
			'password'  => Input::get('password'),
			'active' => "1"
		);
			if (Auth::attempt($artistdata)) {
				
				//return "Hello";
		
				// validation successful!
				// redirect them to the secure section or whatever
				$artist_email = Input::get('loginemail');
				
				$userresults=App\User::where('email', '=', $artist_email)->first();
				
				
				 Session::put('firstname', $userresults->firstname);
				 Session::put('lastname', $userresults->lastname);
				 Session::put('artist_name', $userresults->artist_name);
	             Session::put('email', $userresults->email);
				 Session::put('uid', $userresults->uid);
				 
				
				return redirect('artist/profile');
				
		
			} else {        
		
				// validation not successful, send back to form 
				return redirect('artist-login-register')->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
				
				
		
			}
			
	
			 
		}else{
			   return redirect('artist-login-register')->with(
				'error',
				'Please correct the following errors:'
			)->withErrors($validator);
			
			 
			 }
	
	 //return 'Login here';
});

Route::get('/artist/profile', array(
		'middleware' => 'auth',
		function()
{
	return view('artist/profile');
}
));

/*Route::get('/artist.profile', function()
{
	return view('artist.profile');
});

*/
Route::get('/artist/upload', function()
{
	return view('artist/upload');
});


Route::get('artist/upload',array('middleware'=>'auth', function()
{
		  
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		

	      $table = 'arts';
		  $uid = Session::get('uid');
		  $artist_details = DB::table('users')->where('uid',$uid)->first();
		  
		  
	      $totalArtworks =DB::table($table)->where('user_id',$uid)->count();
 		   // return $totalProducts;
		  
		 //$categorytype = DB::table('categorytype')->lists('cattype_name', 'ctid');
		 
		 $categorytype = DB::table('categorytype')->where('relatea', '1')->lists('cattype_name', 'ctid');

	
	       return view('artist/upload')->with(array('totalArtworks'=>$totalArtworks,
		   												'categorytype'=>$categorytype,
														'artist_details'=>$artist_details,
														'menu1'=>$menu1
														   ));
			}));


Route::get('artist.new', function()
{
	$menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
	$menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
	
		  $table = 'arts';
		  $uid = Session::get('uid');
		  $artist_details = DB::table('users')->where('uid',$uid)->first();
		  
		  
	      $totalArtworks =DB::table($table)->where('user_id',$uid)->count();
 		   // return $totalProducts;
	
			//$categorytype = DB::table('categorytype')->lists('cattype_name', 'ctid');
			
			$categorytype = DB::table('categorytype')->where('relateb', '1')->lists('cattype_name', 'ctid');
	
			return view('artist.new')->with(array('totalArtworks'=>$totalArtworks,
														'categorytype'=>$categorytype,
														'artist_details'=>$artist_details,
												 			'menu1'=>$menu1,
												  			'menu2'=>$menu2
															));
});


Route::get('category', function()
{
	$ctid = Input::get('ctid');
	$resultset = DB::table('categories')->where('cattype_id', $ctid)->get();
	
	return $resultset;
	
});

Route::get('subcategory', function()
{
	$cid = Input::get('cid');
	$resultset = DB::table('subcategories')->where('cat_id', '=', $cid)->orderBy('scid', 'desc')->get();
	
	return $resultset;
	
});

Route::get('subsubcategory', function()
{
	$scid = Input::get('scid');
	$resultset = DB::table('subsubcategories')->where('subcat_id', '=', $scid)->orderBy('sscid', 'desc')->get();
	
	return $resultset;
	
});

Route::get('subsubsubcategory', function()
{
	$sscid = Input::get('sscid');
	$resultset = DB::table('subsubsubcategories')->where('subsubcat_id', '=', $sscid)->get();
	
	return $resultset;
	
});

Route::post('artist/upload', function()
{
	$artwork_cattype = Input::get('artwork_categorytype');
	$artwork_cat = Input::get('artwork_category');
	$artwork_subcat = Input::get('artwork_subcategory');
	$artwork_subsubcat = Input::get('artwork_subsubcategory');
	$artwork_subsubsubcat = Input::get('artwork_subsubsubcategory');
	$artist_name = Input::get('artist_name');
	$artwork_name = Input::get('artwork_name');
	$artwork_price = Input::get('artwork_price');
	$artwork_description = Input::get('artwork_description');
	$table = 'arts';
	$artist_id = Session::get('uid');
	
	$artwork_image = Input::get('artwork_image');

	// $product_size = json_encode(Input::get('product_size'));

    $artwork_image1 = Input::get('artwork_image1');
	


	//return $artwork_price;


                     if (strpos($artwork_price, ',') !== false) {
          $artwork_price = str_replace(",","",Input::get('artwork_price'));
                              }else{

                              	 $artwork_price = Input::get('artwork_price');

                              }

	
	
	//return $product_image;
	
	if($artwork_image1 == "secret"){
		
		//Session::flash('img_error', 'First image cannot be empty.');
		
		return redirect('artist/upload')->with('img_error', 'First image cannot be empty..')
            ->withInput();
		
		//return redirect('artist.upload');
		
		}

	//upload image  to server
	
	
	// requires php5
	define('UPLOAD_DIR', 'public/yarthimages/artworks/');
	$artwork_image1 = str_replace('data:image/png;base64,', '', $artwork_image1);
	$artwork_image1 = str_replace(' ', '+', $artwork_image1);
	$data1 = base64_decode($artwork_image1);
	$image_name1 = uniqid() . '.png';
	$file1 = UPLOAD_DIR . $image_name1;
	$success1 = Storage::put($file1, $data1);
	
	$imagename1 = $image_name1;
	
	
	   DB::table($table)->insert(
	   array('cattype_id' => $artwork_cattype, 'cat_id' => $artwork_cat, 'subcat_id' => $artwork_subcat, 'subsubcat_id' => $artwork_subsubcat, 'subsubsubcat_id' => $artwork_subsubsubcat, 'user_id' => $artist_id, 'user_name' => $artist_name, 'name' => $artwork_name, 'unit_price' => $artwork_price, 'image' => $imagename1, 'description' => $artwork_description)
);



        Session::flash('status', 'Your Artwork has been uploaded!');
		
		return redirect('artist/upload');
	
	 
});


/*Route::get('artist/view-edit-artworks/{cattypeId}/{catId}/{subCatId}/{subsubCatId}/{subsubsubCatId}}', array('middleware'=>'auth',  function($cattypeId,$catId,$subCatId,$subsubCatId,$subsubsubCatId)
{
	

		  //GETS CATEGORIES
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		

	      $table = 'arts';
		  $uid = Session::get('uid');
		  
		  $artwork_details = DB::table($table)->where('cat_id', '=' , $CatId)->where('user_id', '=', $uid)->orderBy('aid', 'desc')->paginate(12);
		  
		  $cat = DB::table('categories')->where('cid', '=' , $CatId)->first();
		  
		  
	      $totalArtworks =DB::table($table)->where('user_id',$uid)->count();
 		   // return $totalProducts;
		  
		 //$categorytype = DB::table('categorytype')->lists('cattype_name', 'ctid');
		 
		 //$categorytype = DB::table('categorytype')->where('relatea', '1')->lists('cattype_name', 'ctid');

	
	       return view('artist/view-edit-artworks')->with(array('totalArtworks'=>$totalArtworks,
		   												//'categorytype'=>$categorytype,
														'cat'=>$cat->cat_name,
														//'artist_details'=>$artist_details,
														'artwork_details'=>$artwork_details,
														'menucate1'=>$menucate1,
														'menucate2'=>$menucate2,
														'menucate3'=>$menucate3,
														'menucate4'=>$menucate4,
														'menucate5'=>$menucate5,
														'menucate6'=>$menucate6,
		   												   'menu1'=>$menu1
														   ));
}));
*/

Route::get('artist/view-edit-artworks/{cattypeId}/{catId}', array('middleware'=>'auth',  function($cattypeId,$catId)
{
	

		  //GETS CATEGORIES
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		  
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		

	      $table = 'arts';
		  $uid = Session::get('uid');
		  
		  $artwork_details = DB::table($table)->where('cat_id', '=' , $catId)->where('user_id', '=', $uid)->orderBy('aid', 'desc')->paginate(12);
		  
		  $cat = DB::table('categories')->where('cid', '=' , $catId)->first();
		  
		  
	      $totalArtworks =DB::table($table)->where('user_id',$uid)->count();
 		   // return $totalProducts;
		  
		 
			
	       return view('artist/view-edit-artworks')->with(array('totalArtworks'=>$totalArtworks,
		   												'cat'=>$cat,
														'artwork_details'=>$artwork_details,
														'menucate1'=>$menucate1,
														'menucate2'=>$menucate2,
														'menucate3'=>$menucate3,
														'menucate4'=>$menucate4,
														'menucate5'=>$menucate5,
														'menucate6'=>$menucate6,
		   												   'menu1'=>$menu1
														   ));
}));




Route::get('artist/view-edit-artworks/', array('middleware'=>'auth',  function()
{
	

		  //GETS CATEGORIES
		  $menucate1 = DB::table('categories')->where('cid','1')->get();
		  $menucate2 = DB::table('categories')->where('cid','2')->get();
		  $menucate3 = DB::table('categories')->where('cid','3')->get();
		  $menucate4 = DB::table('categories')->where('cid','4')->get();
		  $menucate5 = DB::table('categories')->where('cid','5')->get();
		  $menucate6 = DB::table('categories')->where('cid','6')->get();
		  
		 
		  
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  		

	      $table = 'arts';
		  $uid = Session::get('uid');
		  
		  $artwork_details = DB::table($table)->where('user_id', '=', $uid)->orderBy('aid', 'desc')->paginate(12);
		  
		  	  
	      $totalArtworks =DB::table($table)->where('user_id',$uid)->count();
 		   // return $totalProducts;
		  
		 
	
	       return view('artist/view-edit-artworks')->with(array('totalArtworks'=>$totalArtworks,
		   												'artwork_details'=>$artwork_details,
														'menucate1'=>$menucate1,
														'menucate2'=>$menucate2,
														'menucate3'=>$menucate3,
														'menucate4'=>$menucate4,
														'menucate5'=>$menucate5,
														'menucate6'=>$menucate6,
														'menu1'=>$menu1
														   ));
}));



Route::post('artist/view-edit-artworks', function()
{
	
	$new_artworkName = Input::get('artwork_name');
	$new_artworkPrice = Input::get('price');
	//$new_artworkQty = Input::get('artwork_qty');
	$artwork_id = Input::get('artwork_id');
	
	$table = 'arts';
	
	DB::table($table)->where('aid', '=', $artwork_id)->update(array('name' => $new_artworkName,'unit_price' => $new_artworkPrice));
	
	 //Session::flash('update_msg','Product successfully updated!');
	
	return "success";
	
});

Route::get('artist/view_order',array('middleware'=>'auth' , function()
{
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubsubcategories')->where('cattype_id','2')->get();
		  
		
		  
		  $uid = Session::get('uid');
		  
      
	     $order_count = DB::table('orders')->where('artist_id',$uid)->count();
	   
        $order_details = DB::table('orders')->where('artist_id',$uid)->orderBy('id', 'desc')->paginate(20);
	
	
	 return view('artist/view_order')->with(array('order_details'=>$order_details,
	 												'order_count'=>$order_count,
													  'menu1'=>$menu1,
																   'menu2'=>$menu2
																  ));
	 
	 
}));

Route::get('artist.account',array('middleware'=>'auth' , function()
{
	      $menu1 = DB::table('subcategories')->where('cat_id','1')->get();
		  $menu2 = DB::table('subcategories')->where('cat_id','2')->get();
		  $menu3 = DB::table('subcategories')->where('cat_id','3')->get();
		  $menu4 = DB::table('subcategories')->where('cat_id','4')->get();
		  $menu5 = DB::table('subcategories')->where('cat_id','5')->get();
		
		  
		  $act_details = DB::table('users')->where('uid',Session::get('uid'))->first();
		
     return view('artist.account')->with(array('act_details'=>$act_details,
	 															   'menu1'=>$menu1,
																   'menu2'=>$menu2,
																   'menu3'=>$menu3,
																   'menu4'=>$menu4,
																   'menu5'=>$menu5
																   ));
}));

Route::post('artist.account',array('middleware'=>'auth' , function()
{
	
	  $uid = Session::get('uid');
	  $bank_name = Input::get('bank_name');
	  $act_no = Input::get('act_no');
	  

	  DB::table('users')->where('uid', '=', $uid)->update(array('bank_name'=>$bank_name,'act_no'=>$act_no));
	   
	  Session::flash('msg','Account successfully added');
	  
	  return redirect('artist.account');
		
	
}));


/*Route::get('artist/delete_artwork/{cattypeId}/{catId}/{artwork_id}', array('middleware'=>'auth', function($cattypeId,$catId,$artwork_id)
{
	$table='arts';
	$id = $artwork_id;
	$uid = Session::get('uid');
	
	DB::table($table)->where('aid', '=', $id)->where('user_id', '=', $uid)->delete();

	return redirect("artist/view-edit-artwork/{cattypeId}/{catId}");

	
}));
*/



/*Route::get('artist/delete_artwork/{cattypeId}/{catId}/{subCatId}/{subsubCatId}/{subsubsubCatId}/{artwork_id}',array('middleware'=>'auth' ,function($cattypeId,$catId,$subCatId,$subsubCatId,$subsubsubCatId,$artwork_id)
{
	$table='arts';
	$id = $artwork_id;
	$uid = Session::get('uid');
	
	DB::table($table)->where('aid', '=', $id)->where('user_id', '=', $uid)->delete();

	return redirect("artist/view-edit-artwork/$cattypeId/$catId/$subCatId/$subsubCatId/$subsubsubCatId/$artwork_id");

	
}));
*/


Route::get('artist/delete_artwork/{cattypeId}/{catId}/{subCatId}/{subsubCatId}/{subsubsubCatId}/{artwork_id}',array('middleware'=>'auth' ,function($cattypeId,$catId,$subCatId,$subsubCatId,$subsubsubCatId,$artwork_id)
{
	$table='arts';
	$id = $artwork_id;
	$uid = Session::get('uid');
	
	DB::table($table)->where('aid', '=', $id)->where('user_id', '=', $uid)->delete();

	return redirect("artist/view-edit-artworks/{$cattypeId}/{$catId}");

	
}));





Route::get('artist.new', function()
{
	$menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
	$menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
	
		  $table = 'arts';
		  $uid = Session::get('uid');
		  $artist_details = DB::table('users')->where('uid',$uid)->first();
		  
		  
	      $totalArtworks =DB::table($table)->where('uid',$uid)->count();
 		   // return $totalProducts;
	
			//$categorytype = DB::table('categorytype')->lists('cattype_name', 'ctid');
			
			$categorytype = DB::table('categorytype')->where('relateb', '1')->lists('cattype_name', 'ctid');
	
			return view('artist.new')->with(array('totalArtworks'=>$totalArtworks,
														'categorytype'=>$categorytype,
														'artist_details'=>$artist_details,
												 			'menu1'=>$menu1,
												  			'menu2'=>$menu2
															));
});



Route::get('delivery-info-checkout', function()
{
	     $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		$menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		
	
	// $delivery = DB::table('delivery')->first();
	
	$contents = Cart::content();
	
	$carttotal = Cart::total();
	
	  $artists = array();
					
      foreach($contents as $content){
		 
		 if(!in_array($content->options->artist_id,$artists)){
							
		array_push($artists,$content->options->artist_id);					
		 
						
		 }
		}
		
	 // $deliveryCount = count($vendors);						
	 // $delivery = $deliveryCount * $delivery->price;
	 // Session::put('delivery',$delivery);
	
	return view('delivery-info-checkout')->with(array('cart_content'=>$contents,
																'carttotal'=>$carttotal,
																'menu1'=>$menu1,
																   'menu2'=>$menu2
																   ));

	
});

Route::post('delivery-info-checkout', array('middleware'=>'auth', function()
{
	$validator = Validator::make(
        Input::all(),
        array(
		  'firstname' => 'required|max:255',
		  'lastname' => 'required|max:255',
		  'phone' => 'required',
		
		 'gender' =>  'required',
		  'address'=> 'required',
         'state' => 'required',
		 
		 'country' =>  'required',
		  'city'=> 'required',
		  
		 
        )
    );
	
	if($validator->passes()){
	$uid = Session::get('uid');
	
	//return $uid;
	
	$firstname = Input::get('firstname');
	$lastname = Input::get('lastname');
	$phone = Input::get('phone');
	$gender = Input::get('gender');
	$country = Input::get('country');
	$state = Input::get('state');
	$city = Input::get('city');
	$address = Input::get('address');
	$add_info = Input::get('add_info');
	
	Session::put('firstname',$firstname);
	Session::put('lastname',$lastname);
	Session::put('phone',$phone);
	Session::put('address',$address);
	Session::put('state',$state);
	Session::put('country',$country);
	Session::put('city',$city);
	Session::put('gender',$gender);
	
	DB::table('users')->where('uid', '=', $uid)->update(array('firstname' =>$firstname,'lastname' => $lastname,'phone' =>$phone,'country' =>$country , 'state' =>$state, 'city' =>$city, 'address' =>$address, 'gender' =>$gender, 'additional_info' =>$add_info));
	
	return redirect('checkout');
	}else{
		   return redirect('delivery-info-checkout')->with(
            'error',
            'Please correct the following errors:'
        )->withErrors($validator);
		
		 
		 }
	

}));

Route::get('checkout', array('middleware'=>'auth', function()
{
	$state = Session::get('state');
		
	$contents = Cart::content();
	
	$carttotal = Cart::total();
	
	$totalqty = Cart::count();
	
	if(!$state){
		
	}
	
	
	$user_state = DB::table('users')->where('state', '=', $state)->get();
	
	$shippings = DB::table('delivery')->where('state', '=', $state)->get();
	
	
	//Cart::update($rowId, array('name' => 'Product 1'));
					 return view('checkout')->with(array(
					 										'cart_content'=>$contents,
															'carttotal'=>$carttotal,
															'totalqty'=>$totalqty,
															'shippings'=>$shippings,
															'user_state'=>$user_state
															
															));
}));

Route::post('checkout', function()
{
	                              $cust_id = Session::get('uid');
							      $firstname = Session::get('firstname');
							      $lastname = Session::get('lastname');
								  $cust_email = Session::get('email');
								// $email = "kadri_adedeji@yahoo.com";
								  $gender = Session::get('gender');
								  $phone = Session::get('phone');
								  $state = Session::get('state');
								  $city = Session::get('city');
								  $address = Session::get('address');
								 
								  
	if(Input::get('payment')=='onDelivery'){
		//send data to the orders table
		
		
	
	$user_state = DB::table('users')->where('state', '=', $state)->first();
	
	$shippings = DB::table('delivery')->where('state', '=', $state)->get();
		
	    $orders = DB::table('orders')->get();
		
		$ordercount = count($orders);
		
		//return($ordercount);
		
		$ordercount++;
		
		$rand_no = rand(1000,9000000);
		
	
		
		$order_id = "ORD".date('Y').$rand_no.$ordercount;
		
		Session::put('order_id',$order_id);
		
		$cart_content = Cart::content();
		$totalqty = Cart::count();
		
		
		foreach($cart_content as $content){
			
			foreach($shippings as $shipping){
			
			$user=new Order();
			
		$art_id =  $content->id;
		$art_name =  $content->name;
		$art_qty =  $content->qty;
		$art_price =  $content->price;
		$artist_id =  $content->options->artist_id;
		$artist_lastname =  $content->options->artist_lastname;
		$artist_firstname =  $content->options->artist_firstname;
		$artist_name = $artist_lastname .' ' .$artist_firstname;
		$artist_email =  $content->options->artist_email;
		$delivery_price = $shipping->price;
		
		
		
		//$customer_code = "NU".substr(md5(microtime()),rand(0,26),8);
		
		
		
		
		$user->order_id = $order_id;
		//$user->customer_code = $customer_code;
		$user->art_id = $art_id;
	    $user->art_name = $art_name;
	   
	   $user->artist_id = $artist_id; 
	   $user->artist_name = $artist_name;
	   
	   $user->artist_email = $artist_email; 
	  // $user->vend_phone = $vendor_phone;  
	   
	   $user->cust_id = $cust_id;
	   $user->cust_firstname = $firstname;
	   $user->cust_lastname = $lastname;
	   $user->cust_email = $cust_email;
	   $user->cust_phone = $phone;
	   $user->cust_address = $address .','.' ' .$city .','.' ' .$state;
	   
	   $user->price = $art_price;
	   $user->delivery_price = $delivery_price;
	   $user->quantity = $art_qty;
	   $user->delivered = "NO";
	   $user->status = "pending";
	   
	 
	   
	   $user->save();
		
		}
		}
		
		
		
	 	
		
	   return redirect('order_complete');
		
		
		
		
	
		}else{
			
	      return ('pay through gtpay');
	
		}

});


Route::get('order_complete', function()
{

  		  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		 

	 $order_id = Session::get('order_id');
	
	 $cart_contents = Cart::content();
	 $carttotal = Cart::total();
	 $totalqty = Cart::count();
	
	  
	  $order_details = DB::table('orders')->where('order_id', '=', $order_id)->first();
	  $full_details = DB::table('orders')->where('order_id', '=', $order_id)->get();
	  
	 
		
	  $cust_email = $order_details->cust_email;
	  $customer = array('cust_email'=>$cust_email);
	  
	 // return $customer['cust_email'];
	  
		/*Mail::send('emails.welcome',array('full_details'=> 

$full_details,'order_details'=>$order_details), function($message) use 

($customer)
		{
		  $message->to($customer['cust_email'], 'Customer')
				  ->subject('Yarth Art Order!');
		});*/
		
		
		
		 // $vend_email = $order_details->vend_email;
		 
		 $all_artistEmail = array();
		 
		 foreach($full_details as $full_detail){
			 
			$artist_email = $full_detail->artist_email;
			
				if(!in_array($artist_email,$all_artistEmail))
				{
			       array_push($all_artistEmail,$artist_email);
				}
		}
		  $artist_email = $all_artistEmail;
	      $artist = array('artist_email'=>$artist_email);
		 
		/*Mail::send('emails.artist',array('full_details'=> 

$full_details,'order_details'=>$order_details), function($message) use 

($artist)
		{
		  $message->to($artist['artist_email'], 'Vendor')
				  ->subject('Yarth Art Order!');
		});*/
		
		
		
		 $admin_email = "yimicsidris@live.com";
	      $admin = array('admin_email'=>$admin_email);
		 
		/*Mail::send('emails.admin',array('full_details'=> 

$full_details,'order_details'=>$order_details), function($message) use ($admin)
		{
		  $message->to($admin['admin_email'], 'Admin')->subject('Yarth Art Order!');
		});*/
	 
	  
	  
	//return $order_details->cust_firstname;
	

	 
							return view('order_complete')->with(array('order_details'=>$order_details,
																		'full_details'=>$full_details,
																		'cart_contents'=>$cart_contents,
																		'carttotal'=>$carttotal,
																		'totalqty'=>$totalqty,
																		'menu1'=>$menu1,
																		'menu2'=>$menu2
																			
									));
	 
});

Route::get('admin', function()
{

	 return view('admin/login');
});


Route::post('admin/login', function()
{

	$validator = Validator::make(
			Input::all(),
			array(
			  'username' => array('required'),
			  'password' => array('required')
				 
			)
		);
		
		
		 if ($validator->passes()){
			 
			 
			 $admindata = array(
			'admin_username'     => Input::get('username'),
			'password'  => Input::get('password')
		);
			if (Auth::attempt($admindata)) {
				
				//return "Hello";
		
				// validation successful!
				// redirect them to the secure section or whatever
				$username = Input::get('username');
				
				$userresults=App\User::where('admin_username', '=', $username)->first();
				
			//return('hello');
				
				return redirect('admin/index');
				
		
			} else {        
		
				// validation not successful, send back to form 
				return redirect('admin')->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
				
				
		
			}
			
	
			 
		}else{
			   return redirect('admin')->with(
				'error',
				'Please correct the following errors:'
			)->withErrors($validator);
			
			 
			 }
});

Route::get('admin/index',array('middleware'=>'auth' , function()
{
	  	  $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		  
		
	
	$artists = DB::table('users')->where('account_type', '=', '1')->get();
	$vendors = DB::table('users')->where('account_type', '=', '3')->get();
	$customers = DB::table('users')->where('account_type', '=', '0')->get();
	$orders = DB::table('orders')->get();
	$orders_pending = DB::table('orders')->where('status', '=', 'pending')->get();
	$sales = DB::table('orders')->where('delivered', '=', 'YES')->get();
	
	
	
	$total_artists = count($artists);
	$total_vendors = count($vendors);
	$total_customers = count($customers);
	$total_orders = count($orders);
	$total_orders_pending = count($orders_pending);
	$total_sales = count($sales);
	
	$sub = DB::table('orders')->latest()->take(10);
   $last_orders = DB::table(DB::raw('(' . $sub->toSql() . ') as sub'))->latest()->get();
       
	//return($result);
   
	  return view('admin/index')->with(array('total_artists'=>$total_artists,'total_vendors'=>$total_vendors,'total_customers'=>$total_customers,'total_orders'=>$total_orders,'total_orders_pending'=>$total_orders_pending,'total_sales'=>$total_sales,'last_orders'=>$last_orders, 'menu1'=>$menu1,
																   'menu2'=>$menu2
																   ));
	 
	 
}));



Route::get('admin/view_customers', array('middleware'=>'auth' ,function()
{
       
      $customer_details = DB::table('users')->where('account_type', '=', '0')->orderBy('uid', 'desc')->paginate(20);
	  
	 return view('admin/view_customers')->with(array('customer_details'=>$customer_details));
	 
	 
}));

Route::get('admin/view_artists',array('middleware'=>'auth' , function()
{
       
	   
	   
      $artist_details = DB::table('users')->where('account_type', '=', '1')->orderBy('uid', 'desc')->paginate(20);
	  

	 return view('admin/view_artists')->with(array('artist_details'=>$artist_details));
	 
	 
}));

Route::get('admin/view_vendors',array('middleware'=>'auth' , function()
{
       
	   
	   
      $vendor_details = DB::table('users')->where('account_type', '=', '3')->orderBy('uid', 'desc')->paginate(20);
	  

	 return view('admin/view_vendors')->with(array('vendor_details'=>$vendor_details));
	 
	 
}));

Route::get('admin/view_orders/{artistId}', function($artistId)
{
       $artist_id = $artistId;
	  
	   $order_count = DB::table('orders')->where('artist_id', '=', $artist_id)->count();
	   
      $order_details = DB::table('orders')->where('artist_id', '=', $artist_id)->orderBy('id', 'desc')->paginate(20);

	  return view('admin/view_orders')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
});

Route::get('admin/view_orders/{vendorId}', function($vendorId)
{
       $vendor_id = $vendorId;
	  
	   $order_count = DB::table('orders')->where('artist_id', '=', $vendor_id)->count();
	   
      $order_details = DB::table('orders')->where('artist_id', '=', $vendor_id)->orderBy('id', 'desc')->paginate(20);

	  return view('admin/view_orders')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
});


Route::get('admin/view_all_orders',array('middleware'=>'auth' , function()
{
       
	   $order_count = DB::table('orders')->count();
	   
      $order_details = DB::table('orders')->orderBy('id', 'desc')->paginate(20);

	  return view('admin/view_orders')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/activate_artist/{artistId}',array('middleware'=>'auth' , function($artistId)
{
       $artist_id = $artistId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $artist_id)->update(array('active'=>'1'));
	   
	   $artist_details = DB::table('users')->where('uid', '=', $artist_id)->first();
		
		//return $vendor_details->vend_email;
		
		  $artist_email = $artist_details->email;
	      $artist = array('artist_email'=>$artist_email);
		 
		/*Mail::send('emails.activate_artist',array('artist_details'=>$artist_details), function($message) use ($artist)
		{
		  $message->to($artist['artist_email'], 'Artist')
				  ->subject('Yarth Activation!');
		});*/
	   
	   Session::flash('active_msg','Artist successfully activated!');
	  return redirect('admin/view_artists');
	  

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/activate_vendor/{vendorId}',array('middleware'=>'auth' , function($vendorId)
{
       $vendor_id = $vendorId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $vendor_id)->update(array('active'=>'1'));
	   
	   $vendor_details = DB::table('users')->where('uid', '=', $vendor_id)->first();
		
		//return $vendor_details->vend_email;
		
		  $vendor_email = $vendor_details->email;
	      $vendor = array('vendor_email'=>$vendor_email);
		 
		/*Mail::send('emails.activate_vendor',array('vendor_details'=>$vendor_details), function($message) use ($vendor)
		{
		  $message->to($vendor['vendor_email'], 'Vendor')
				  ->subject('Yarth Activation!');
		});*/
	   
	   Session::flash('active_msg','Vendor successfully activated!');
	  return redirect('admin/view_vendors');
	  

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/deactivate_artist/{artistId}',array('middleware'=>'auth' , function($artistId)
{
       $artist_id = $artistId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $artist_id)->update(array('active'=>'0'));
	   
	   Session::flash('deactive_msg','Artist successfully de-activated!');
	  return redirect('admin/view_artists');
	  

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/deactivate_vendor/{vendorId}',array('middleware'=>'auth' , function($vendorId)
{
       $vendor_id = $vendorId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $vendor_id)->update(array('active'=>'0'));
	   
	   Session::flash('deactive_msg','Vendor successfully de-activated!');
	  return redirect('admin/view_vendors');
	  

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/delete_artist/{artistId}',array('middleware'=>'auth' , function($artistId)
{
       $artist_id = $artistId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $artist_id)->delete();
	   
	   Session::flash('del_msg','Artist successfully deleted!');
	  return redirect('admin/view_artists');
	  

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/delete_vendor/{vendorId}',array('middleware'=>'auth' , function($vendorId)
{
       $vendor_id = $vendorId;
	   
	  // return($vendor_id);
	   
	   DB::table('users')->where('uid', '=', $vendor_id)->delete();
	   
	   Session::flash('del_msg','Vendor successfully deleted!');
	  return redirect('admin/view_vendors');
	  

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));


Route::get('admin/delivery',array('middleware'=>'auth' , function()
{
	      $menu1 = DB::table('subsubsubcategories')->where('cattype_id','1')->get();
		  $menu2 = DB::table('subsubsubcategories')->where('cattype_id','2')->get();
		  
		
		  
		  $delivery_info = DB::table('delivery')->first();
		  $delivery_details = DB::table('delivery')->orderBy('did', 'desc')->paginate(9);
		  
		  Session::put('did',$delivery_info->did);
		
          return view('admin/delivery')->with(array('delivery_info'=>$delivery_info,
		  												  'delivery_details'=>$delivery_details,
	 															   'menu1'=>$menu1,
																   'menu2'=>$menu2
																   ));
}));

Route::post('admin/delivery',array('middleware'=>'auth' , function()
{
	
	  $did = Input::get('delivery_id');
	  $price = Input::get('price');
	  
	  

	  DB::table('delivery')->where('did', '=', $did)->update(array('price'=>$price));
	   
	  Session::flash('delivery_msg','Fare successfully updated');
	  
	  return redirect('admin/delivery');
		
	
}));

Route::get('admin/add_delivery',array('middleware'=>'auth' , function()
{
     return view('admin/add_delivery');
}));

Route::post('admin/add_delivery', function()
{
	
	$validator = Validator::make(
			Input::all(),
			array(
			  'state' =>  'required',
			  'price' => 'required'
				 
			)
		);
		
		
		  if ($validator->passes()){
		 
		
       $delivery=new Delivery();
	   
	  
	   $delivery->state=Input::get('state'); 
	   $delivery->price=Input::get('price');
	  
	   
	   $delivery->save();
	   
	  Session::flash('adddelivery_msg','Fare successfully added!');
	  
		 return redirect('admin/add_delivery');
		
		 
		 }else{
		   return redirect('admin/add_delivery')->with(
            'error',
            'Please correct the following errors:'
        )->withErrors($validator);
		
		 
		 }
     
});

Route::get('admin/deliver_art/{orderId}',array('middleware'=>'auth' , function($orderId)
{
       $order_id = $orderId;
	   
	  // return($vendor_id);
	   
	   DB::table('orders')->where('id', '=', $order_id)->update(array('delivered'=>'YES'));
	
	  // $vendor_details = DB::table('orders')->where('product_id', '=', $product_id)->first();
	   
	   Session::flash('delivered_msg','Item has been marked delivered!');
	  //return redirect('admin.view_order.'.$vendor_details->vend_id);
	 return redirect('admin/view_all_orders'); 

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));

Route::get('admin/payfor_art/{orderId}',array('middleware'=>'auth' , function($orderId)
{
       $order_id = $orderId;
	   
	  // return($vendor_id);
	   
	   DB::table('orders')->where('id', '=', $order_id)->update(array('status'=>'Approved Successful'));
	
	  // $vendor_details = DB::table('orders')->where('product_id', '=', $product_id)->first();
	   
	   Session::flash('paid_msg','Order has been marked Approved!');
	  //return redirect('admin.view_order.'.$vendor_details->vend_id);
	 return redirect('admin/view_all_orders'); 

	  //return view('backend.view_order')->with(array('order_details'=>$order_details,'order_count'=>$order_count));
	 
	 
}));



Route::get('admin/add_admin',array('middleware'=>'auth' , function()
{
     return view('admin/add_admin');
}));

Route::post('admin/add_admin', function()
{
	
	$validator = Validator::make(
			Input::all(),
			array(
			  'admin_username' =>  'required|unique:users',
			  'password' => array('required')
				 
			)
		);
		
		
		  if ($validator->passes()){
		 
		
       $user=new User();
	   
	  
	   $user->admin_username=Input::get('admin_username'); 
	   $user->password=Hash::make(Input::get('password'));
	  
	   $user->account_type="2";
	   
	   $user->save();
	   
	  Session::flash('admin_msg','Admin successfully created!');
	  
		 return redirect('admin/add_admin');
		
		 
		 }else{
		   return redirect('admin/add_admin')->with(
            'error',
            'Please correct the following errors:'
        )->withErrors($validator);
		
		 
		 }
     
});



Route::get('logout', function()
{
	Session::flush();
	
	 Auth::logout();
	
	  return redirect('/index');
});

Route::get('logoutadmin', function()
{
	Session::flush();
	
	 Auth::logout();
	
	  return redirect('/admin');
});


Route::get('password/remind', function(){
	
	return view('password/remind');
	
	});
	
Route::get('password/reset', function(){
	
	return view('password/reset');
	
	});
Route::get('password/reset/{token}','RemindersController@getReset' );
Route::post('postRemind','RemindersController@postRemind' );
Route::post('postReset','RemindersController@postReset' );
Route::get('password/success', function(){
	
	return view('password/success');
	
	});


