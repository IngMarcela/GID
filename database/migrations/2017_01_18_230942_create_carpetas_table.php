<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarpetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carpetas', function(Blueprint $table)
		{
			// columnas que cotendra la tabla carpetas y el tipo de dato de estas
			$table->increments('id');
			$table->tinyInteger('num_carpeta')->unsigned()->unique();
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
		Schema::drop('carpetas');
	}

}
