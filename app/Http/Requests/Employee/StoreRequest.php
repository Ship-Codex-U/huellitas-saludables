<?php

namespace App\Http\Requests\Employee;

use Illuminate\Validation\Rule;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|alpha_spaces',
            'last_name' => 'required|alpha_spaces',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required|digits:10',
            'state' => 'required',
            'city' => 'required',
            'street_number' => 'required',
            'alternative_contact_name' => 'required|alpha_spaces',
            'alternative_contact_phone_number' => 'required|max_digits:10|min_digits:10',
            'position' => [
                'required',
                'integer',
                Rule::exists('position_types', 'id'), // Agrega la regla exists
            ],
            'send_confirmation_mail' => 'integer',
            'stay_on_this_page' => 'integer'
        ];
    }

    public function messages() : array
    {
        return [
            'email.unique' => 'Este correo ya fue registrado, por favor verifique.',
            'position.integer' => 'El valor seleccionado para la posición no es válido. Por favor, elija una opción válida.',
            'position.exists' => 'El valor seleccionado para la posición no es válido. Por favor, elija una opción válida.',
        ];
    }
}
