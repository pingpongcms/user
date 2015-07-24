<?php namespace Pingpong\Cms\User\Http\Requests\Admin;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest {

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
		$id = $this->segment(3);

		$rules = [
			'name' => 'required',
			'username' => 'required|unique:users,username,' . $id,
			'email' => 'required|unique:users,email,' . $id,
		];

		if ($this->has('password')) {
			$rules['password'] = 'required|min:6';
		}

		return $rules;
	}

}
