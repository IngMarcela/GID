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
			'Municipio_o_Vereda'  =>	'numeric|min:1',
			'Departamento'			=>	'required|numeric|min:1',
			'Objeto'				=>	'required|max:950|string',
			'Valor_Presupuestado'	=>	'required|numeric|min:100000',
			'Valor_Ejecutado' 		=>	'required|numeric|min:100000',
			'Estado_del_Contrato'	=>	'required|min:1',
			'Estante'				=>	'required|numeric|min:2',
			'Caja' 					=>	'required|numeric|min:2',
			'Carpeta'				=>	'required|numeric|min:2',
			'Fecha_de_Inicio' 		=>	'required|date',
			'RUP' 					=>	'required|numeric',
			'Comentario' 			=>	'string|max:240',
			'Tipo_de_Contrato'		=>	'required|numeric|min:1',
			'Tipo_de_Contratante'	=>	'required|numeric|min:1',
			'Contratante'			=>	'required|string',
			'Contratista'			=>	'required|numeric|min:1',
		];
	}
	
	public function messages()
    {
        return [
            'Estante.min'   	 	=> 'El campo estante debe ser distinto a 0',
            'Caja.min'  	 	 	=> 'El campo caja debe ser distinto a 0',
            'Carpeta.min'	 	 	=> 'El campo carpeta debe ser distinto a 0',
            'Valor_Presupuestado'	=> 'El campo valor presupuestado debe ser como minimo de 100,000 a 0',
            'Valor_Ejecutado'		=> 'El campo valor ejecutado debe ser como minimo de 100,000',
        ];
    }

}
