<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ms', function(Blueprint $table)
		{
			$table->increments('idms');
			$table->integer('id_cus');
			$table->string('nmpro');
			$table->string('qtyms');
			$table->string('typems');
			$table->string('startms');
			$table->string('endms');
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
		Schema::drop('ms');
	}

}
