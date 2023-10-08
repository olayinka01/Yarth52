<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		
		Schema::create('subcategories', function(Blueprint $table)
		{
			$table->increments('scid');
			$table->string('subcat_name');
			$table->integer('cat_id')->unsigned();
			$table->foreign('cat_id')->references('cid')->on('categories');
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
		Schema::drop('subcategories');
	}
}
