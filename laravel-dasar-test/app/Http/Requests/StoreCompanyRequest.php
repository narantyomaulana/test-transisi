<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'nullable|email:rfc,dns',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048MB|dimensions:min_width=100,min_height=100',
            'website'=>['nullable','regex:/^((?:https?\:\/\/|www\.)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)$/']
        ];
    }

    public function messages()
    {
        return [
            'company_logo.image' => 'The company logo must be an image file.',
            'company_logo.mimes' => 'The company logo must be a file of type: jpeg, png, jpg, gif, svg.',
            'company_logo.max' => 'The company logo may not be greater than 2MB.',
            'company_logo.dimensions' => 'The company logo must be at least 100x100 pixels in size.',
            'website.regex' => 'The website format is invalid. Please enter a valid URL.',
        ];
    }
}
