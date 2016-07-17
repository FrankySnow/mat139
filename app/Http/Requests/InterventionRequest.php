<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class InterventionRequest extends Request {

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
			#'date'		=>	'required|date_format:Y-m-d|exists:jours,date',
			'caserne'	=>	'in:1,2,3',
			#'role'		=>	'alpha_num',
			'typologie'	=>	'required',
			'categorie'	=>	'required',
			'adresse'	=>	'required',
			'commune'	=>	'required',
			'code_3'	=>	'required|boolean',
			'ARI'		=>	'required|boolean',
		];
	}

}
