<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kas', function(Blueprint $table)
		{
			$table->increments('id_kas');
			$table->integer('id_cus');
			$table->string('license');
			$table->string('qty');
			$table->string('start');
			$table->string('end');
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
		Schema::drop('kas');
	}

}
