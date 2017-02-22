<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class CajaCreateRequest extends Request {

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
			'Caja'				=> 'required|numeric|min:1|unique:cajas,num_caja',			
		];
	}
	public function messages()
    {
        return [
            'Caja.min'   	 	=> 'El campo caja debe ser distinto a 0',
			'Caja.unique'   	 	=> 'El campo ingresado ya existe',
            
        ];
    }

}
