<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Contratante extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'contratantes';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =							        	 ['id_contrante','nombre_contrato'];
	

}
