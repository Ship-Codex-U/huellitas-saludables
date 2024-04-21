<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

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
            'email' => 'required|email',
            'phone_number' => 'required|max_digits:10|min_digits:10',
            'state' => 'required',
            'city' => 'required',
            'street_number' => 'required',
            'alternative_contact_name' => 'required|alpha_spaces',
            'alternative_contact_phone_number' => 'required|max_digits:10|min_digits:10',
            'position' => 'required|integer',
            'send_confirmation_mail' => 'integer',
            'stay_on_this_page' => 'integer'
        ];
    }
}
