<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'unique:comics', 'max:50'],
            'description' => ['nullable', 'max:16777215'],
            'thumb' => ['nullable', 'max:4294967295'],
            'price' => ['nullable', 'decimal:2', 'max:8'],
            'series' => ['nullable', 'max:50'],
            'sale_date' => ['nullable', 'date'],
            'type' => ['nullable', 'max:50']
        ];
    }
}
