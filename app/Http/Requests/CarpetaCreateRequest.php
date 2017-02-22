<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class CarpetaCreateRequest extends Request {

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
			'Carpeta'				=> 'required|numeric|min:1|unique:carpetas,num_carpeta',			
		];
	}
	public function messages()
    {
        return [
            'carpeta.min'   	 	=> 'El campo carpeta debe ser distinto a 0',
			'carpeta.unique'   	 	=> 'El campo ingresado ya existe',
            
        ];
    }
}
