<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PasswordController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	 public function remind()
  {
    return view('password/remind');
  }
  
  public function request()
{
  $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
 
  return Password::remind($credentials);
}

public function reset($token)
{
  return view('password/reset')->with('token', $token);
}

public function update()
{
  $credentials = array('email' => Input::get('email'),'password' => Input::get('password'),'password_confirmation' => Input::get('password_confirmation'));
 
  return Password::reset($credentials, function($user, $password)
  {
    $user->password = Hash::make($password);
 
    $user->save();
 
   // return Redirect::to('login')->with('flash', 'Your password has been reset');
   
   return 'hello world';
  });
}

}
