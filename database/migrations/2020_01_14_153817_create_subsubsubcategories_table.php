<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsubsubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
	{
		//
		
		Schema::create('subsubsubcategories', function(Blueprint $table)
		{
			$table->increments('ssscid');
			$table->string('subsubsubcat_name');
			$table->integer('subsubcat_id')->unsigned();
			$table->foreign('subsubcat_id')->references('sscid')->on('subsubcategories');
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
