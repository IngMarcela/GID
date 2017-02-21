<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'contratos';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['num_contrato','objeto','fecha_inicio','valor_presupuestado','valor_ejecutado','comentario','id_vereda','id_municipio','id_estado',
	'id_tipo_contrato','id_contratante','id_contratista'];
	
	
	
	// metodos que informaran la asocioacion entre el modelo Contrato y el resto de modelos con
	// lo cual se permitira acceder a la informacion de los modelos con los que exite relacion
	public function vereda(){
		return $this->hasOne('GID\Vereda');
		//return $this->hasMany(Vereda::class);
	}
	public function municipío(){
		return $this->hasOne('GID\Municipio');
	}
		
	public function estado(){
		return $this->hasOne('GID\Estado');
	}
	
	public function tipoContrato(){
		return $this->hasOne('GID\TipoContrato');
	}
	public function contratante(){
		return $this->hasOne('GID\Contratante');
	}
	public function contratista(){
		return $this->hasOne('GID\Contratista');
	}

}
