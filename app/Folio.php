<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Folio extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'folios';
	
	protected $fillable = ['id_carpeta','cantidad_folio','iniciacion'];
	

}
