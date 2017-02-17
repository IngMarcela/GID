<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class ActaFinal extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'actafinals';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =['id_estante','id_caja','id_carpeta','num_folios',
						  ,'detalle_acta_final','valor_acta_final','fecha_firma_acta_final','pdf_acta_final','observacion_acta_final'];

}
