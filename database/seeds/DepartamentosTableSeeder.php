<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DepartamentosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla departamentos
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Amazonas'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Antioquia'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Arauca'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Atlantico'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Bolivar'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Boyaca'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Caldas'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Caqueta'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Casanare'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Cauca'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Cesar'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Choco'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Cordoba'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Cundinamarca'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Guainia'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Guaviare'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Huila'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'La Guajira'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Magdalena'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Meta'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Narino'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Norte de Santander'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Putumayo'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Quindio'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Risaralda'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'San Andres y Providencia'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Santander'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Sucre'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Tolima'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Valle del Cauca'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Vaupes'
		));
		\DB::table('departamentos')->insert(array(
					'nom_departamento'=>'Vichada'
		));
		
	}

}