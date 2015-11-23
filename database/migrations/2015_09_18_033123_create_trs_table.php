<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trs', function(Blueprint $table)
		{
			$table->increments('idtr');
			$table->integer('id_cus');
			$table->string('licensetr');
			$table->string('qtytr');
			$table->string('starttr');
			$table->string('endtr');
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
		Schema::drop('trs');
	}

}
