<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certificacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Entidad_certifica',100);
			$table->date('fecha_expedicion_certificacion');
			$table->string('pdf_certificacion',100);
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
		Schema::drop('certificacions');
	}

}
