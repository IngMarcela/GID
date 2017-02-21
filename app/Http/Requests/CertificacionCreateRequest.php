<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class CertificacionCreateRequest extends Request {

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
			'Estante'				=>	'numeric|min:2',
			'Caja' 					=>	'required|numeric|min:2',
			'Carpeta'				=>	'required|numeric|min:2',
			'folios'				=>	'numeric|min:2',
			//'No_Acta' 			=>	'required|max:50|unique:acta,num_contrato',
			'Entidad que certifica'	=>	'required|string',
			'Fecha_de_expedicion' 	=>	'required|date',
			'entregado por'			=>	'required|string',
			//pdf					
			//
			//
		];
	}
	
	public function messages()
    {
        return [
            'Estante.min'   	 	=> 'El campo estante debe ser distinto a 0',
            'Caja.min'  	 	 	=> 'El campo caja debe ser distinto a 0',
            'Carpeta.min'	 	 	=> 'El campo carpeta debe ser distinto a 0',
        ];
    }

}
