<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class MunicipioCreateRequest extends Request {

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
			//
			'Nom_municipio'		=>		'required|string'
		];
	}
	public function messages()
    {
        return [
            'Nom_municipio.min'   	 	=> 'El campo municipio debe ser ingresado'
        ];
    }

}
