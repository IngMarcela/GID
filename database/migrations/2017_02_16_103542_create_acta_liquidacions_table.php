<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaLiquidacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actaliquidacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('detalle_acta_liquidacion',250)->nullable();
			$table->integer('valor_acta_liquidacion')->unsigned()->nullable();
			$table->date('fecha_firma_acta_liquidacion');
			$table->string('pdf_acta_liquidacion',100);
			$table->string('observacion_acta_liquidacion',250)->nullable();
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
		Schema::drop('acta_liquidacions');
	}

}
