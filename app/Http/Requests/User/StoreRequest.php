<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            'position' => 'required|alpha_spaces',
            'role' => [
                'required',
                'integer',
                Rule::exists('roles', 'id'), // Agrega la regla exists
            ],
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8', // Asegura que la contraseña tenga al menos 8 caracteres
                'confirmed',
            ],
        ];
    }

    public function messages() : array
    {
        return [
            'password.regex' => 'La contraseña debe de tener al menos: 1 letra mayuscula, 1 letra minuscula, 1 número y 1 símbolos.',
            'password.min' => 'La contraseña debe de ser minimo 8 caracteres.',
            'email.unique' => 'Este correo ya fue registrado, por favor verifique.',
            'position.integer' => 'El valor seleccionado para la posición no es válido. Por favor, elija una opción válida.',
            'position.exists' => 'El valor seleccionado para la posición no es válido. Por favor, elija una opción válida.',
        ];
    }



}
