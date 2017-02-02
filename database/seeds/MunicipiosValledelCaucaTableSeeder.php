<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MunicipiosValledelCaucaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla municipios
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Alcala'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Andalucia'
		));		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Ansarmanuevo'
		));		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Argelia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Bolivar'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Buenaventura'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Buga'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Bugalagrande'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Caicedonia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Calima-El Darien'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Candelaria'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Cartago'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Dagua'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'El Aguila'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'El Cairo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'El Cerrito'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'El Dovio'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Florida'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Ginebra'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Guacari'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Jamundi'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'La Cumbre'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'La Union'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'La Victoria'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Obando'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Palmira'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Pradera'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Restrepo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Riofrio'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Roldanillo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'San Pedro'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Sevilla'
		));
		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Toro'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Trujillo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Tulua'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Ulloa'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Versalles'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Vijes'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Yotoco'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Yumbo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Zarzal'
		));
	}

}