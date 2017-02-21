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
			
			'Estante'				=>	'required|numeric|min:1',
			'Caja' 					=>	'required|numeric|min:1',
			'Carpeta'				=>	'required|numeric|min:1',
			'Folio_Inicial'		 	=>	'required|numeric|min:1',
			'Folio_Final' 		 	=>	'required|numeric|min:1',
			'No_Contrato' 			=>	'required|max:50|unique:contratos,num_contrato',
			'Estado_del_Contrato'	=>	'required|min:1',
			'Tipo_de_Contrato'		=>	'required|numeric|min:1',
			'Fecha_de_Inicio' 		=>	'required|date',
			'Objeto'				=>	'required|max:950|string',
			'Departamento'			=>	'required|numeric|min:1',
			'Municipio' 		 	=>	'numeric|min:1',
			'Vereda'	 		 	=>	'numeric|min:0',
			'Valor_Presupuestado'	=>	'required|numeric|min:100000',
			'Valor_Ejecutado' 		=>	'numeric|min:100000',
			'Contratante'			=>	'required|string',
			'Tipo_de_Contratante'	=>	'required|numeric|min:1',
			'Contratista'			=>	'required|numeric|min:1',
			'RUP' 					=>	'required|numeric',
			'Comentario' 			=>	'string|max:240',
			
			
		];
	}
	
	public function messages()
    {
        return [
            'Estante.min'   	 	=> 'El campo estante no esta seleccionado correctamente',
            'Caja.min'  	 	 	=> 'El campo caja no esta seleccionado correctamente',
            'Carpeta.min'	 	 	=> 'El campo carpeta no esta seleccionado correctamente',
            'Municipio.min'	 	 	=> 'El campo municipio no esta seleccionado correctamente',
			'Vereda.min'	 	 	=> 'El campo vereda no esta seleccionado correctamente',
            'Valor_Presupuestado'	=> 'El campo valor presupuestado debe ser como minimo de 100,000',
            'Valor_Ejecutado'		=> 'El campo valor ejecutado debe ser como minimo de 100,000',
        ];
    }

}
