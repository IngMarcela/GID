<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estantes', function(Blueprint $table)
		{
			// columnas que cotendra la tabla estantes y el tipo de dato de estas
			$table->increments('id');
			$table->tinyInteger('num_estante')->unsigned()->unique();
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
		Schema::drop('estantes');
	}

}
