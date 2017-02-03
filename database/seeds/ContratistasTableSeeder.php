<?php

use Illuminate\Database\Seeder;

class ContratistasTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla contratistas
		\DB::table('contratistas')->insert(array(
					'contratista'=>'Electrosistemas del Cauca/IDJ'		
		));
		\DB::table('contratistas')->insert(array(
					'contratista'=>'Terceros'		
		));
				
		
	}

}