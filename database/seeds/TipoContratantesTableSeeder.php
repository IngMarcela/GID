<?php

use Illuminate\Database\Seeder;

class TipoContratantesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla tipocontratantes
		\DB::table('tipocontratantes')->insert(array(
					'tipo_contratante'=>'Privado'		
		));
		\DB::table('tipocontratantes')->insert(array(
					'tipo_contratante'=>'Publico'		
		));
				
		
	}

}