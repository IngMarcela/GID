<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla estados
		\DB::table('estados')->insert(array(
					'estado'=>'Ejecutado'		
		));
		
		\DB::table('estados')->insert(array(
					'estado'=>'No Ejecutado'		
		));
	}

}