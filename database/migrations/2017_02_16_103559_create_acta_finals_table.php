<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaFinalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actafinals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('detalle_acta_final',500);
			$table->integer('valor_acta_final')->unsigned();
			$table->date('fecha_firma_acta_final');			
			$table->string('pdf_acta_final',100);
			$table->string('observacion_acta_final',250)->nullable();
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
		Schema::drop('acta_finals');
	}

}
