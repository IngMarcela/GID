<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoContratantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipocontratantes', function(Blueprint $table)
		{
			// columnas que cotendra la tabla tipocontratantes y el tipo de dato de estas
			$table->increments('id');
			$table->string('tipo_contratante',60)->unique();
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
		Schema::drop('tipo_contratantes');
	}

}
