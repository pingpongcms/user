<?php namespace Pingpong\Cms\User\Http\Requests\Admin;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'username' => 'required|unique:users',
			'email' => 'required|unique:users',
			'password' => 'required|min:6',
		];
	}

}
