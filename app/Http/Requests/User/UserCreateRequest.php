<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' =>[ 'required' , 'string' , 'min:3' ],
            'family' =>[ 'required' , 'string' , 'min:3' ],
            'email' =>[ 'required' , 'email' , 'min:3' ],
            'city' =>[ 'required' , 'string' , 'min:3' ],
            'word' =>[ 'required' , 'string' , 'min:3' ],
            'post' =>[ 'required' , 'string' , 'min:3' ],
            'phone' =>[ 'required' , 'numeric' , 'min:11' ,'max:13' ],
            'data' =>[ 'required' ],
            'file' =>[ 'required' ],
        ];
    }
}
