<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetInitialPasswordRequest extends FormRequest
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
            'password' => ['regex:/^(?=.*?[a-zA-Z])(?=.*?\d)[a-zA-Z\d]{8,}$/', 'max:255', 'required'],
            'confirm_password' => 'required|string|min:8|max:255|same:password',
        ];
    }
}
