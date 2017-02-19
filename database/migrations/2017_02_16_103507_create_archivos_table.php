<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archivos', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('num_archivo')->unsigned();
			$table->text('detalle_archivo',500);
			$table->string('pdf_archivo',100);
			$table->string('observacion_archivo',250)->nullable();	
			$table->integer('id_contrato')->unsigned();
			$table->integer('id_folio')->unsigned()->nullable();	
			$table->timestamps();
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_contrato')->references('id')->on('contratos')->onUpdate('cascade');			
			$table->foreign('id_folio')->references('id')->on('folios')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('archivos');
	}

}
