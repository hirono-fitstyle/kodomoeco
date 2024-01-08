<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'confirm_password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => '新しいパスワードは英数混在で8文字以上を指定してください',
            'password.max' => '新しいパスワードは255文字以内で指定してください',
            'password.required' => '新しいパスワードを入力してください',
            'confirm_password.required' => '新しいパスワードの確認を入力してください',
            'confirm_password.same' => '新しいパスワードと新しいパスワードの確認の入力が一致しません',
        ];

    }
}
