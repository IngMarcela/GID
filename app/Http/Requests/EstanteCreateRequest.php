<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class EstanteCreateRequest extends Request {

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
			'Estante'				=> 'required|numeric|min:1|unique:estantes,num_estante',			
		];
	}
	public function messages()
    {
        return [
            'Estante.min'   	 	=> 'El campo estante debe ser distinto a 0',
			'Estante.unique'   	 	=> 'El campo ingresado ya existe',
            
        ];
    }

}
