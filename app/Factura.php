<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'facturas';
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =[
							'num_factura','empresa_factura','detalle_factura','valor_factura','pdf_factura',
							'id_contrato'];
}
