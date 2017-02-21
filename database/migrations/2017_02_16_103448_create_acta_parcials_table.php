<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaParcialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actaparcials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pdf_acta_parcial',100);
			$table->string('observacion_acta_parcial',250)->nullable();
			$table->integer('id_contrato')->unsigned();
			$table->timestamps();
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_contrato')->references('id')->on('contratos')->onUpdate('cascade');			
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acta_parcials');
	}

}
