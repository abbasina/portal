<?php

namespace App\Http\Requests\Manager\Comisions;

use Illuminate\Foundation\Http\FormRequest;

class introRequest extends FormRequest
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

            'introduce'=>'required',
            'boss'=>'required',
            'boss_image'=>'mimes:png,jpg',
            'boss_bio'=>'required',
            'chief'=>'required',
            'chief_image'=>'mimes:png,jpg',
            'chief_bio'=>'required'
        ];
    }
}
