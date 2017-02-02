<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('licitacions', function(Blueprint $table)
		{
			// columnas que cotendra la tabla licitacions y el tipo de dato de estas
			$table->increments('id');
			$table->string('num_proceso',60)->unique();
			$table->integer('id_vereda')->unsigned()->nullable();
			$table->integer('id_municipio')->unsigned()->nullable();
			$table->integer('id_departamento')->unsigned();
			$table->integer('id_cuerpo')->unsigned()->unique();
			$table->tinyInteger('valor');
			$table->integer('id_estado')->unsigned();
			$table->integer('id_caja')->unsigned();
			$table->integer('id_carpeta')->unsigned();
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_vereda')->references('id')->on('veredas')->onUpdate('cascade');
			$table->foreign('id_municipio')->references('id')->on('municipios')->onUpdate('cascade');
			$table->foreign('id_departamento')->references('id')->on('departamentos')->onUpdate('cascade');
			$table->foreign('id_cuerpo')->references('id')->on('cuerpos')->onUpdate('cascade');
			$table->foreign('id_estado')->references('id')->on('estados')->onUpdate('cascade');
			$table->foreign('id_carpeta')->references('id')->on('carpetas')->onUpdate('cascade');
			$table->foreign('id_caja')->references('id')->on('cajas')->onUpdate('cascade');
			
			
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
		Schema::drop('licitacions');
	}

}
