<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'departamentos';
	
	protected $fillable = ['nom_departamento'];

}
