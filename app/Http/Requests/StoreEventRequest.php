<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            // 'date' => ['required', 'date', 'after:today'],
            'date' => ['required', 'date', 'after_or_equal:' . Carbon::today()->toDateString()],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'description' => ['required', 'string', 'max:500'], // Adjust the max length accordingly
            'location' => ['required', 'string', 'max:40'],
            'price' => ['required', 'numeric'],
            'capacity' => ['required', 'numeric'],
            'categorie_id' => ['required' , 'exists:categories,id'],
            'available_places' => ['required', 'numeric'],
            'type_reservation' => ['required', 'in:auto,manuel']
        ];
    }
}
