<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'name' => 'required',
            'isbn'=> 'required',
            'price'=> 'required|numeric',
            'info'=> 'required',
            'date_available'=> 'required',
            'img_path'=> 'required|mimes:jpg,png',
        ];
    }

    public function messages()
    {
        'name.required' => 'Полето е задължително',
        'isbn.required' => 'Полето е задължително',
        'price.numeric' => 'Въведете число',
    }
}
