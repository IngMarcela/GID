<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratantes', function(Blueprint $table)
		{
			// columnas que cotendra la tabla contratantes y el tipo de dato de estas
			$table->increments('id');
			$table->string('contratante',60);
			$table->integer('id_tipo_contratante')->unsigned();
			$table->timestamps();
			// columnas que cotendra la tabla tipocontratantes y el tipo de dato de estas
			$table->foreign('id_tipo_contratante')->references('id')->on('tipocontratantes')->onUpdate('cascade');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contratantes');
	}

}
