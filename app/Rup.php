<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class RUP extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'rups';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['serie_rup','id_contratista'];
	
	public function tipoContratante(){
		return $this->hasOne('GID\Contratista');
	}
	
	public static function rups($id){
		// retorna todos los registros de la tabla rups que coincidan en su columna 
		// id_contratista con el $id de entrada
		return RUP::where('id_contratista','=',$id)->get();
	}

}
