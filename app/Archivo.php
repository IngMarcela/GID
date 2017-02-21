<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'archivos';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =	[
							'num_archivo','detalle_archivo','pdf_archivo','observacion_archivo',
							'id_contrato'];

}
