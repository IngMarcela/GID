<?php

use Illuminate\Database\Seeder;

class EstantesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla estantes
		\DB::table('estantes')->insert(array(
					'num_estante'=>	0	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	1	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	2	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	3	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	4	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	5	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	6	
		));
		\DB::table('estantes')->insert(array(
					'num_estante'=>	7	
		));
		
		
	}

}