<?php namespace GID;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ActaInicial extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'actainicials';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable =['num_acta_inicial','detalle_acta_inicial','valor_acta_inicial','fecha_firma_acta_inicial','fecha_vencimiento_acta_inicial','pdf_acta_inicial','observacion_acta_inicial','id_contrato'];
	
	/*
	public function setPdf_acta_inicialAttribute($pdf_acta_inicial){
		$this->attributes['pdf_acta_inicial'] = Carbon::now()->second.$pdf_acta_inicial->getClientOriginalName();
		$name = Carbon::now()->second.$pdf_acta_inicial->getClientOriginalName();
		\Storage::disk('local')->put($name,\File::get($pdf_acta_inicial));
		
	}
	*/
	 
	
}
