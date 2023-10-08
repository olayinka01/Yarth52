<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_id');
			$table->string('art_id');
			$table->string('art_name');
			$table->string('artist_id');
			$table->string('artist_name');
			$table->string('artist_email');
			$table->string('cust_id');
			$table->string('cust_firstname');
			$table->string('cust_lastname');
			$table->string('cust_phone');
			$table->string('cust_email');
			$table->string('cust_address');
			$table->string('price');
			$table->string('delivery_price');
			$table->string('quantity');
			$table->string('delivered');
			$table->string('status');
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
		//
		Schema::drop('orders');
	}
}
