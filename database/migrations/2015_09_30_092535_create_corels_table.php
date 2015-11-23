<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('corels', function(Blueprint $table)
		{
			$table->increments('idcr');
			$table->integer('id_cus');
			$table->string('licensecr');
			$table->string('qtycr');
			$table->string('typecr');
			$table->string('startcr');
			$table->string('endcr');
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
		Schema::drop('corels');
	}

}
