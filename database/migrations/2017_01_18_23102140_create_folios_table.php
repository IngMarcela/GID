<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('folios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_carpeta')->unsigned();
			$table->integer('num_folio')->unsigned();
			
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_carpeta')->references('id')->on('carpetas')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('folios');
	}

}
