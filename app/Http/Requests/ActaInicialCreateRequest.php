<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class ActaInicialCreateRequest extends Request {

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
			'No_Acta' 				=>	'required|numeric',
			'Detalle'	 			=>	'required|string|max:100',
			'Valor'					=>	'numeric|min:100000',
			'Fecha_de_Firma' 		=>	'required|date',
			'Fecha_de_Vencimiento'	=>	'date',
			'Observacion' 			=>	'string|max:240',
			'PDF'					=>	'required|mimes:pdf'					
		];
	}
	public function messages()
    {
        return [
            'Estante.min'   	 	=> 'El campo estante no esta seleccionado correctamente',
            'Caja.min'  	 	 	=> 'El campo caja no esta seleccionado correctamente',
            'Carpeta.min'	 	 	=> 'El campo carpeta no esta seleccionado correctamente',
            'Valor'					=> 'El campo valor presupuestado debe ser como minimo de 100,000',
			'PDF'					=> 'El archivo ingresado debe ser en formato PDF'
        ];
    }

}
