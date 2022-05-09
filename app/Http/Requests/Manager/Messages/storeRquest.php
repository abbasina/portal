<?php

namespace App\Http\Requests\Manager\Messages;

use Illuminate\Foundation\Http\FormRequest;

class storeRquest extends FormRequest
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
            'msgbody' => 'required|min:2|max:40',
            'owner' => 'required',
            'attachment' => 'mimes:jpg,jpeg,zip,rar,png'
        ];
    }
}
