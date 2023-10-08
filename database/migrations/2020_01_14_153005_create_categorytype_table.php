<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorytypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		
		Schema::create('categorytype', function(Blueprint $table)
		{
			$table->increments('ctid');
			$table->string('cattype_name');
			$table->integer('relatea');
			$table->integer('relateb');
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
		
		Schema::drop('categorytype');
	}
}
