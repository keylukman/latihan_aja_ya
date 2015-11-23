<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdobesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adobes', function(Blueprint $table)
		{
			$table->increments('idad');
			$table->integer('id_cus');
			$table->string('licensead');
			$table->string('qtyad');
			$table->string('typead');
			$table->string('startad');
			$table->string('endad');
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
		Schema::drop('adobes');
	}

}
