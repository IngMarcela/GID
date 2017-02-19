<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaInicialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actainicials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('num_acta_inicial')->unsigned();
			$table->string('detalle_acta_inicial',250)->nullable();
			$table->integer('valor_acta_inicial')->unsigned()->nullable();
			$table->date('fecha_firma_acta_inicial');
			$table->date('fecha_vencimiento_acta_inicial')->nullable();
			$table->String('pdf_acta_inicial',100);		
			$table->string('observacion_acta_inicial',250)->nullable();			
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
		Schema::drop('acta_inicials');
	}

}
