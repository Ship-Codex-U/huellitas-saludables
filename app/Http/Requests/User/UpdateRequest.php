<?php

namespace App\Http\Requests\User;

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
            'employee_id' => 'required|integer',
            'position' => 'required|alpha_spaces',
            'name' => 'required|alpha_spaces',
            'last_name' => 'required|alpha_spaces',
            'role' => [
                'required',
                'integer',
                Rule::exists('position_types', 'id'), // Agrega la regla exists
            ],
            'status_e' => [
                'required',
                'integer',
                Rule::exists('employee_statuses', 'id'), // Agrega la regla exists
            ],
            'email' => [
                'required',
                'email',
                // Verifica que el email sea único en la tabla 'data' y el campo 'email'
                // Excluye el ID actual si estás actualizando un registro existente
               // Rule::unique('employees', 'email')->ignore($this->route('id'), 'id'), // Para crear registros nuevos, 'id' podría ser null
            ]
        ];
    }
}
