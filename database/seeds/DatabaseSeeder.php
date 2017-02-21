<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		// definimos el orden en el que se cargaran los registros a la base de datos
		// $this->call('UserTableSeeder');
		$this->call('EstantesTableSeeder');
		$this->call('EstadosTableSeeder');
		$this->call('ContratistasTableSeeder');
		$this->call('TipoContratosTableSeeder');
		$this->call('TipoContratantesTableSeeder');
		$this->call('DepartamentosTableSeeder');
		$this->call('MunicipiosCapitalesTableSeeder');
		$this->call('MunicipiosCaucaTableSeeder');
		$this->call('MunicipiosNarinoTableSeeder');
		$this->call('MunicipiosValledelCaucaTableSeeder');
		$this->call('VeredasTableSeeder');
	}

}
