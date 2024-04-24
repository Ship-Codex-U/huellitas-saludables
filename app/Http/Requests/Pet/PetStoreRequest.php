<?php

namespace App\Http\Requests\Pet;

use Illuminate\Foundation\Http\FormRequest;

class PetStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'pet_type_id' => 'required|integer|exists:pet_types,id',
            'breed' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:255',
            'customer_id' => 'required|integer|exists:customers,id',
        ];
    }
}
