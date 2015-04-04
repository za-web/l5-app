<?php namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6',
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
        
        public function messages()
        {
            return [
                'required' => 'The field :attribute required',
                'min' => 'Min is :attribute',
                'max' => 'Max is :attribute',
                'confirmed' => 'Passwords don\'t match'
            ];
        }

}
