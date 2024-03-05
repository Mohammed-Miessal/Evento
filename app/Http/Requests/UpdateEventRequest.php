<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'date' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'description' => ['required', 'string', 'max:500'], // Adjust the max length accordingly
            'location' => ['required', 'string', 'max:40'],
            'price' => ['required', 'numeric'],
            'capacity' => ['required', 'numeric'],
            'categorie_id' => ['required' , 'exists:categories,id']
        ];
    }
}
