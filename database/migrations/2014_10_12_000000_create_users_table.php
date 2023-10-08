<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('uid');
			$table->string('firstname');
			$table->string('othername');
			$table->string('lastname');
			$table->string('customer_name');
			$table->string('artist_name');
			$table->string('vend_name');
			$table->string('admin_username');
			$table->string('email');
			$table->string('password');
			$table->string('phone');
			$table->string('photo_description');
			$table->string('alt_phone');
		    $table->string('country');
			$table->string('state');
			$table->string('city');
			$table->string('address');
			$table->string('gender');
			$table->string('additional_info');
			$table->string('account_type');
			$table->string('active');
			$table->rememberToken();
			$table->timestamps();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
