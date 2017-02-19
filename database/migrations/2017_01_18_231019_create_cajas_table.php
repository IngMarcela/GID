<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cajas', function(Blueprint $table)
		{
			// columnas que cotendra la tabla cajas y el tipo de dato de estas
			$table->increments('id');
			$table->tinyInteger('num_caja')->unsigned()->unique();
			$table->integer('id_estante')->unsigned();
			$table->timestamps();			
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_estante')->references('id')->on('estantes')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cajas');
	}

}
