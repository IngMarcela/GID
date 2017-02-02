<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipocontratos', function(Blueprint $table)
		{
			// columnas que cotendra la tabla tipocontratos y el tipo de dato de estas
			$table->increments('id');
			$table->string('tipo_contrato',60)->unique();
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
		Schema::drop('tipo_contratos');
	}

}
