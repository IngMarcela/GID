<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class ActaLiquidacion extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'actaliquidacions';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =[
						 	'detalle_acta_liquidacion','valor_acta_liquidacion','fecha_firma_acta_liquidacion','pdf_acta_liquidacion','observacion_acta_liquidacion',
							'id_contrato'];

}
