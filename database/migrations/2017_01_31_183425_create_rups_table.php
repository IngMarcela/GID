<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRUPsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rups', function(Blueprint $table)
		{
			// columnas que cotendra la tabla rups y el tipo de dato de estas
			$table->increments('id');
			$table->string('serie_rup',60)->unique();
			$table->integer('id_contratista')->unsigned();
			$table->timestamps();
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_contratista')->references('id')->on('contratistas')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('r_u_ps');
	}

}
