<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		
		Schema::create('subsubcategories', function(Blueprint $table)
		{
			$table->increments('sscid');
			$table->string('subsubcat_name');
			$table->integer('subcat_id')->unsigned();
			$table->foreign('subcat_id')->references('scid')->on('subcategories');
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
		Schema::drop('subsubcategories');
	}
}
