<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeredasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('veredas', function(Blueprint $table)
		{
			// columnas que cotendra la tabla veredas y el tipo de dato de estas
			$table->increments('id');
			$table->string('nom_vereda',60);
			$table->integer('id_municipio')->unsigned();
			$table->timestamps();
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_municipio')->references('id')->on('municipios')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('veredas');
	}

}
