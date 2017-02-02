<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class VeredasTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla veredas
		\DB::table('veredas')->insert(array(
				'id_departamento' => '1',
				'nom_vereda'   => 'Yanaconas'
		));
		
		\DB::table('veredas')->insert(array(
				'id_departamento' => '1',
				'nom_vereda'   => 'Pueblillo'
		));
		
		\DB::table('veredas')->insert(array(
				'id_departamento' => '2',
				'nom_vereda'   => 'La Estrella'
		));
		
			
	}

}