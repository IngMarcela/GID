<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class ActaParcialCreateRequest extends Request {

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
			'Folio_Inicial'			=>	'numeric|min:1',
			'Folio_Final'			=>	'numeric|min:1',
			'Detalle'	 			=>	'string|max:100',
			'Observacion' 			=>	'string|max:240',			
			'PDF'					=>	'required|mimes:pdf'
			//
		];
	}
	public function messages()
    {
        return [
            'Estante.min'   	 	=> 'El campo estante no esta seleccionado correctamente',
            'Caja.min'  	 	 	=> 'El campo caja no esta seleccionado correctamente',
            'Carpeta.min'	 	 	=> 'El campo carpeta no esta seleccionado correctamente',
            
        ];
    }


}
