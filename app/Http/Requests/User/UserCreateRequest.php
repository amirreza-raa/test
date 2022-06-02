<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
class UserCreateRequest extends FormRequest
{
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
            'name' =>['required','string','min:3','max:191'],
            'family' =>['required','string','min:3','max:191'],
            'email' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'city' =>['required','string','min:3','max:191'],
            'word' =>['required','string','min:3','max:191'],
            'post' =>['required','string','min:3','max:191'],
            'phone' =>[ 'required', 'number', 'max:14', 'unique:users' ],
            'data' =>[ 'required' ],
        ];
    }

    // public function failedValidation(Validator $validator)
    // {

    //     return back()->with('flash_message',
    //         $validator->errors()->first());
    // }
}
