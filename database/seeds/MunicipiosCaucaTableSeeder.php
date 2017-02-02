<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MunicipiosCaucaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla municipios
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Buenos Aires'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Caloto'
		));		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Corinto'
		));		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Guachene'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Miranda'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Padilla'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Puerto Tejada'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Santander de Quilichao'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Suarez'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Villa Rica'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Cajibio'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'El Tambo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'La Sierra'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Morales'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Piendamo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Rosas'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Sotara'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Timbio'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Almaguer'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Argelia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Balboa'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Bolivar'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Florencia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'La Vega'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Mercaderes'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Patia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Piamonte'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'San Sebastian'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Santa Rosa'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Sucre'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Guapi'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Lopez de Micay'
		));
		
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Timbiqui'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Caldono'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Inza'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Jambalo'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Paez'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Purace'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Silvia'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Toribio'
		));
		\DB::table('municipios')->insert(array(
				'id_departamento' => '10',
				'nom_municipio'   => 'Totoro'
		));
	}

}