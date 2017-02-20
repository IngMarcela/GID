<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Vereda extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'veredas';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['id_departamento','nom_vereda'];
	
	public static function veredas($id){
		// retorna todos los registros de la tabla veredas que coincidan en su columna 
		// id_municipio con el $id de entrada
		return Vereda::where('id_municipio','=',$id)->get();
	}
}
