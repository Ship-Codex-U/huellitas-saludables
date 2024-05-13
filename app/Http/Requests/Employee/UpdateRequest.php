<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                // Verifica que el email sea único en la tabla 'data' y el campo 'email'
                // Excluye el ID actual si estás actualizando un registro existente
               // Rule::unique('employees', 'email')->ignore($this->route('id'), 'id'), // Para crear registros nuevos, 'id' podría ser null
            ],
            'phone_number' => 'required|max_digits:10|min_digits:10',
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
            'status_e' => [
                'required',
                'integer',
                Rule::exists('employee_statuses', 'id'), // Agrega la regla exists
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
