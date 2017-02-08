<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class ContratoCrearRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'No_Contrato' 			=>	'required|max:50|unique:contratos,num_contrato',
			'Muninicipio_o_Vereda'  =>	'numeric|min:1',
			'Departamento'			=>	'required|numeric|min:1',
			'Objeto'				=>	'required|max:50|alpha_num',
			'Valor_Presupuestado'	=>	'required|numeric|min:0',
			'Valor_Ejecutado' 		=>	'required|numeric|min:0',
			'Estado_del_Contrato'	=>	'required|min:1',
			'Caja' 					=>	'required|numeric',
			'Carpeta'				=>	'required|numeric',
			'Fecha_de_Inicio' 		=>	'required|date',
			'RUP' 					=>	'required|numeric',
			'Comentario' 			=>	'alpha_num|max:240',
			'Tipo_de_Contrato'		=>	'required|numeric|min:1',
			'Tipo_de_Contratante'	=>	'required|numeric|min:1',
			'Contratante'			=>	'required|alpha_num',
			'Contratista'			=>	'required|numeric|min:1',
		];
	}

}
