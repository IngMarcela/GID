<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Vereda extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'veredas';
	
	protected $fillable = ['id_departamento','nom_vereda'];
}
