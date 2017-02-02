<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MunicipiosCapitalesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla municipios
		\DB::table('municipios')->insert(array(
				'id_departamento' => '1',
				'nom_municipio'   => 'Leticia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '2',
				'nom_municipio'   => 'Medellin'
		));		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '3',
				'nom_municipio'   => 'Arauca'
		));		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '4',
				'nom_municipio'   => 'Barranquilla'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '5',
				'nom_municipio'   => 'Cartagena'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '6',
				'nom_municipio'   => 'Tunja'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '7',
				'nom_municipio'   => 'Manizales'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '8',
				'nom_municipio'   => 'Florencia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '9',
				'nom_municipio'   => 'Yopal'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Popayan'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '11',
				'nom_municipio'   => 'Valledupar'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '12',
				'nom_municipio'   => 'Quibdo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '13',
				'nom_municipio'   => 'Monteria'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '14',
				'nom_municipio'   => 'Bogota'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '15',
				'nom_municipio'   => 'Puerto Inirida'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '16',
				'nom_municipio'   => 'San Jose del Guaviare'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '17',
				'nom_municipio'   => 'Neiva'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '18',
				'nom_municipio'   => 'Riohacha'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '19',
				'nom_municipio'   => 'Santa Marta'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '20',
				'nom_municipio'   => 'Villavicencio'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '21',
				'nom_municipio'   => 'Pasto'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '22',
				'nom_municipio'   => 'Cucuta'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '23',
				'nom_municipio'   => 'Mocoa'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '24',
				'nom_municipio'   => 'Armenia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '25',
				'nom_municipio'   => 'Pereira'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '26',
				'nom_municipio'   => 'San Andres'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '27',
				'nom_municipio'   => 'Bucaramanga'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '28',
				'nom_municipio'   => 'Sincelejo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '29',
				'nom_municipio'   => 'Ibague'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '30',
				'nom_municipio'   => 'Cali'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '31',
				'nom_municipio'   => 'Mitu'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '32',
				'nom_municipio'   => 'Puerto Carreno'
		));
	}

}