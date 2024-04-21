<?php
namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'alternative_contact_name' => 'required',
            'alternative_contact_phone_number' => 'required|digits:10',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            // Agrega aquí las reglas de validación adicionales según tus requisitos
        ];
    }
}
