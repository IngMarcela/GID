<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'estados';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['id_estado','estado'];

}
