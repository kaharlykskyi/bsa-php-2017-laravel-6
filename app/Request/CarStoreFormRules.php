<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreFormRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'model' => "required|max:255",
            'year' => "required|integer|between:1000," . date('Y'),
            'registration_number' => "required|alpha_num|size:6",
            'color' => "required|alpha",
            'price' => "required|numeric",
            'mileage' => "required|numeric",
        ];
    }
}