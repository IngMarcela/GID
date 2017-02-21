<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'certificacions';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =[
						  	'Entidad_certifica','fecha_expedicion_certificacion','entregado_por_certifiacion','pdf_certificacion',
							'id_contrato'];

}
