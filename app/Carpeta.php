<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'carpetas';
	
	protected $fillable = ['id_caja','num_carpeta'];
	

}
