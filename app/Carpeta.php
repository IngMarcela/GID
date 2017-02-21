<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'carpetas';
	
	protected $fillable = ['num_carpeta','id_caja'];
	
	public function Folio(){
		return $this->hasMany('GID\Folio');
		
	}
	
	public static function carpetas($id){
		// retorna todos los registros de la tabla carpetas que coincidan en su columna 
		// id_caja con el $id de entrada
		return Carpeta::where('id_caja','=',$id)->get();
	}
}
