<?php namespace GID;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {

	// nombre de la tabla a la cual se hara referencia dentro de la base de datos
	protected $table = 'contratos';
	
	// campos a los cuales se le permitira que el usuario le asigne valores
	protected $fillable = ['num_contrato','objeto','id_vereda','id_municipio','id_departamento',
	'valor_presupuestado','valor_ejecutado','id_estado','id_estante','id_caja','id_carpeta','fecha_inicio',
	'comentario','id_tipo_contrato','id_contratante','id_contratista'];
	
	
	
	// metodos que informaran la asocioacion entre el modelo Contrato y el resto de modelos con
	// lo cual se permitira acceder a la informacion de los modelos con los que exite relacion
	public function vereda(){
		return $this->hasOne('GID\Vereda');
		//return $this->hasMany(Vereda::class);
	}
	public function municipío(){
		return $this->hasOne('GID\Municipio');
	}
	public function departamento(){
		return $this->hasOne('GID\Departamento');
	}
	
	public function cuerpo(){
		return $this->hasOne('GID\Cuerpo');
	}
	public function estado(){
		return $this->hasOne('GID\Estado');
	}
	public function caja(){
		return $this->hasOne('GID\Caja');
	}
	public function carpeta(){
		return $this->hasOne('GID\Carpeta');
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
