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
			'Estante'				=>	'required|numeric|min:1',
			'Caja' 					=>	'required|numeric|min:1',
			'Carpeta'				=>	'required|numeric|min:1',
			'Folio_Inicial'			=>	'numeric|min:1',
			'Folio_Final'			=>	'numeric|min:1',
			'Entidad_que_Certifica'	=>	'required|string',
			'Fecha_de_Expedicion' 	=>	'required|date',
			'Entregado_por'			=>	'required|string',			
			'PDF'					=>	'required|mimes:pdf',
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
