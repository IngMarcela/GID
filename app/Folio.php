<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Folio extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'folios';
	
	protected $fillable = ['num_folio','id_carpeta','id_contrato','id_acta_inicial','id_acta_parcial','id_acta_final','id_acta_liquidacion','id_archivo','id_factura','id_certificacion'];
	

}
