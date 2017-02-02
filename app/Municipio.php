<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'municipios';

	protected $fillable = ['id_departamento','nom_municipio'];
	
	public static function municipios($id){
		// retorna todos los registros de la tabla municipios que coincidan en su columna 
		// id_departamento con el $id de entrada
		return Municipio::where('id_departamento','=',$id)->get();
	}
}
