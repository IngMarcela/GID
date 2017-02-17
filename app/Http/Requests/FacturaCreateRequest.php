<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class FacturaCreateRequest extends Request {

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
			'No_Factura' 			=>	'max:10',
			'Empresa'	 			=>	'required|string|max:100',
			'Detalle'	 			=>	'string|max:100',
			'Valor_total'			=>	'required|numeric|min:100000',
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
            'Valor'					=> 'El campo valor presupuestado debe ser como minimo de 100,000 a 0',
        ];
    }

}
