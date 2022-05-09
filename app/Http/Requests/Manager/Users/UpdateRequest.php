<?php

namespace App\Http\Requests\Manager\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'fullname' => 'required|min:2|max:40',
            'role' => 'required|numeric|exists:roles,id',
            'phone' => 'required|numeric|digits:11|unique:users,phone,'.$this->request->get('user_id').'' ,      
        ];
    }
}
