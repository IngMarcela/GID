<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'municipios';

	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['nom_municipio','id_departamento'];
	
	public function Vereda(){
		return $this->hasMany('GID\Vereda');
		
	}
	
	public static function municipios($id){
		// retorna todos los registros de la tabla municipios que coincidan en su columna 
		// id_departamento con el $id de entrada
		return Municipio::where('id_departamento','=',$id)->get();
	}
	
	
}
