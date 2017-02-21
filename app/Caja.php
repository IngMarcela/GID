<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'cajas';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['num_caja','id_estante'];
	
	public function Carpeta(){
		return $this->hasMany('GID\Carpeta');
		
	}
	
	public static function cajas($id){
		// retorna todos los registros de la tabla cajas que coincidan en su columna 
		// id_estante con el $id de entrada
		return Caja::where('id_estante','=',$id)->get();
	}
	
}
