<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'archivos';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =['id_estante','id_caja','id_carpeta','num_folios',
						  ,'num_archivos','detalle_archivos','pdf_archivos','observacion_archivos'];

}
