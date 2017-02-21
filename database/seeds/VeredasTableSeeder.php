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
				'id_municipio' => '10',
				'nom_vereda'   => 'Yanaconas'
		));
		
		\DB::table('veredas')->insert(array(
				'id_municipio' => '10',
				'nom_vereda'   => 'Pueblillo'
		));
		
			
	}

}