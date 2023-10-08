<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('cid');
			$table->string('cat_name');
			$table->integer('cattype_id')->unsigned();
			$table->foreign('cattype_id')->references('ctid')->on('categorytype');
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
		
		Schema::drop('categories');
	}
}
