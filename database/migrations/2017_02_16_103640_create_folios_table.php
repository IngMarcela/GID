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
			$table->integer('num_folio')->unsigned();
			$table->integer('id_carpeta')->unsigned();
			$table->integer('id_contrato')->unsigned()->nullable();
			$table->integer('id_acta_inicial')->unsigned()->nullable();
			$table->integer('id_acta_parcial')->unsigned()->nullable();
			$table->integer('id_acta_final')->unsigned()->nullable();
			$table->integer('id_acta_liquidacion')->unsigned()->nullable();
			$table->integer('id_archivo')->unsigned()->nullable();
			$table->integer('id_factura')->unsigned()->nullable();
			$table->integer('id_certificacion')->unsigned()->nullable();
			$table->timestamps();
			
			// columnas que son llaves foraneas y su respectiva tabla a la que hacen referencia 
			$table->foreign('id_carpeta')->references('id')->on('carpetas')->onUpdate('cascade');
			$table->foreign('id_contrato')->references('id')->on('contratos')->onUpdate('cascade');
			$table->foreign('id_acta_inicial')->references('id')->on('actainicials')->onUpdate('cascade');
			$table->foreign('id_acta_parcial')->references('id')->on('actaparcials')->onUpdate('cascade');
			$table->foreign('id_acta_final')->references('id')->on('actafinals')->onUpdate('cascade');
			$table->foreign('id_acta_liquidacion')->references('id')->on('actaliquidacions')->onUpdate('cascade');
			$table->foreign('id_archivo')->references('id')->on('archivos')->onUpdate('cascade');
			$table->foreign('id_factura')->references('id')->on('facturas')->onUpdate('cascade');
			$table->foreign('id_certificacion')->references('id')->on('certificacions')->onUpdate('cascade');
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
