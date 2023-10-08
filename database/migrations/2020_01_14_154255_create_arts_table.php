<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		//
		
		Schema::create('arts', function(Blueprint $table)
		{
			$table->increments('aid');
			$table->integer('cattype_id')->unsigned();
			$table->integer('cat_id')->unsigned();
			$table->integer('subcat_id')->unsigned();
			$table->integer('subsubcat_id')->unsigned();
			$table->integer('subsubsubcat_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('user_name');
			$table->string('name');
			$table->string('unit_price');
			$table->string('bulk_price');
			$table->integer('qty');
			$table->string('image');
			$table->string('shortsto');
			$table->string('description');
			
			
			
			$table->foreign('cattype_id')->references('ctid')->on('categorytype');
			$table->foreign('cat_id')->references('cid')->on('categories');
			$table->foreign('subcat_id')->references('scid')->on('subcategories');
			$table->foreign('subsubcat_id')->references('sscid')->on('subsubcategories');
			$table->foreign('subsubsubcat_id')->references('ssscid')->on('subsubsubcategories');
			$table->foreign('user_id')->references('uid')->on('users');

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
		
		Schema::drop('arts');
	}
}
