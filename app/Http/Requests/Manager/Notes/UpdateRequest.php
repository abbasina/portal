<?php

namespace App\Http\Requests\Manager\Notes;

use Illuminate\Foundation\Http\FormRequest;

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
            'pngfile' => 'required|mimes:png|max:600',
            'title' => 'required|min:10|max:220',
            'description' => 'required|min:50|max:400',
            'notebody' => 'required|min:100',
            'tags' => 'required|min:20|max:250',
        ];
    }
}
