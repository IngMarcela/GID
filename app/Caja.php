<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'cajas';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['id_estante','id_cajas'];

	protected $fillable = ['num_caja'];
}
