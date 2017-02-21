<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratos', function(Blueprint $table)
		{
			// columnas que cotendra la tabla contratos y el tipo de dato de estas
			$table->increments('id');
			$table->string('num_contrato',60)->unique();
			$table->text('objeto',1000);
			$table->date('fecha_inicio');			
			$table->integer('valor_presupuestado')->unsigned();
			$table->integer('valor_ejecutado')->unsigned()->nullable();
			$table->string('comentario',250)->nullable();
			$table->integer('id_vereda')->unsigned()->nullable();
			$table->integer('id_municipio')->unsigned();
			$table->integer('id_estado')->unsigned();
			$table->integer('id_tipo_contrato')->unsigned();
			$table->integer('id_contratante')->unsigned();
			$table->integer('id_contratista')->unsigned();
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_vereda')->references('id')->on('veredas')->onUpdate('cascade');
			$table->foreign('id_municipio')->references('id')->on('municipios')->onUpdate('cascade');
			$table->foreign('id_estado')->references('id')->on('estados')->onUpdate('cascade');
			$table->foreign('id_tipo_contrato')->references('id')->on('tipocontratos')->onUpdate('cascade');
			$table->foreign('id_contratante')->references('id')->on('contratantes')->onUpdate('cascade');
			$table->foreign('id_contratista')->references('id')->on('contratistas')->onUpdate('cascade');
			
			
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
		Schema::drop('contratos');
	}

}
