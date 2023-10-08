<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		Schema::create('city', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('city_id');
			$table->string('state_id');
			$table->string('city');
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
		Schema::drop('city');
	}
}
