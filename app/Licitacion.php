<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Licitacion extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'licitacions';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['num_proceso','valor'];
	

}
