<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:255'],
            'inviteCode' => ['max:30', 'exists:invites,Code'],
            'phone' => ['required', 'numeric', 'digits:11'],
        ];
    }
}
