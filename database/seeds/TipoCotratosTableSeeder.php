<?php

use Illuminate\Database\Seeder;

class TipoContratosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla tipocontratos
		\DB::table('tipocontratos')->insert(array(
					'tipo_contrato'=>'Civil'		
		));
		\DB::table('tipocontratos')->insert(array(
					'tipo_contrato'=>'Obra'		
		));
		\DB::table('tipocontratos')->insert(array(
					'tipo_contrato'=>'Prestacion de servicio'		
		));
		\DB::table('tipocontratos')->insert(array(
					'tipo_contrato'=>'Suministro'		
		));
		
		
	}

}