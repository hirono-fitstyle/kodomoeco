<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountConfirmRequest extends FormRequest
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
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => 'The Last Name is required',
            'first_name.required' => 'The Fisrt Name is required',
            'email.required' => 'An email address is required',
            'email.email' => 'The email address must be valid',
        ];

    }
}
