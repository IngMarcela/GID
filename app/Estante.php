<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Estante extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'estantes';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['id_estantes'];
}
