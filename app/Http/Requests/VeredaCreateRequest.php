<?php namespace GID\Http\Requests;

use GID\Http\Requests\Request;

class VeredaCreateRequest extends Request {

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
			'Nom_vereda'		=>		'required|string'
		];
	}
	public function messages()
    {
        return [
            'Nom_vereda.min'   	 	=> 'El campo vereda debe ser ingresado'
        ];
    }
}
