<?php

use Illuminate\Database\Seeder;

class CarpetasTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// registros que se cargaran de manera automatica a la tabla carpetas
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	0	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	1	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	2	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	3	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	4	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	5	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	6	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	7	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	8	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	9	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	10	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	11	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	12	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	13	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	14	
		));
		\DB::table('carpetas')->insert(array(
					'num_carpeta'=>	15	
		));
		
		
	}

}