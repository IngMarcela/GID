<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class ActaParcial extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'actaparcials';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =	[						  			
							'num_acta_parcial','detalle_acta_parcial','pdf_acta_parcial','observacion_acta_parcial',
							'id_contrato'];

}
