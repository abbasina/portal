<?php

namespace App\Http\Requests\Manager\Capitals;

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
            'title' => 'required|min:2|max:40|unique:capitals,name',
            'city_people_amount' => 'required|min:2|max:100',
            'city_places' => 'required|min:2',
            'city_address' => 'required|min:2',
            'city_tel' => 'required|numeric',
            'city_website' => 'required|min:2',
            'city_website_url' => 'required|min:2',
            'imageUrl' => 'required|mimes:png,jpg|max:5000',
            'Ostan' => 'required|numeric',
        ];
    }
}
