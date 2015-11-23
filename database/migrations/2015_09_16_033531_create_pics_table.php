<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pics', function(Blueprint $table)
		{
			$table->increments('idpic');
			$table->integer('id_cus');
			$table->string('namapic');
			$table->string('tlppic',12);
			$table->string('emailpic');
			$table->string('nmptgs');
			$table->string('namapic2');
			$table->string('tlppic2',12);
			$table->string('emailpic2');
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
		Schema::drop('pics');
	}

}
