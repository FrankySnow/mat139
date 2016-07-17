<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class JourRequest extends Request {

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
			'date'		=>	'required|date_format:Y-m-d',
			'caserne'	=>	'in:1,2,3',
			'equipe'	=>	'in:A,B,C,D',
			'role_1'	=>	'alpha_num',
			'role_2'	=>	'alpha_num',
			'nb_inter'	=>	'numeric',
			'heures_sup' =>	'numeric'
		];
	}

}
