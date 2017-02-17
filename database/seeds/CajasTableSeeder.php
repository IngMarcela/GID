<?php

use Illuminate\Database\Seeder;

class CajasTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla cajas
		\DB::table('cajas')->insert(array(
					'num_caja'=>	0	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	1	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	2	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	3	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	4	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	5	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	6	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	7	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	8	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	9	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	10	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	11	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	12	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	13	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	14	
		));
		\DB::table('cajas')->insert(array(
					'num_caja'=>	15	
		));
		
		
	}

}