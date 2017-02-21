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
			$table->string('num_carpeta',20)->unique();
			$table->integer('id_caja')->unsigned();
			$table->timestamps();			
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_caja')->references('id')->on('cajas')->onUpdate('cascade');
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
