<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequestRequest extends FormRequest
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
            'operator_id' => 'required',
            'last_name' => 'required|max:20',
            'first_name' => 'required|max:20',
            'email' => 'required|email|max:100',
        ];
    }

    public function messages()
    {
        return [
            'operator_id.required' => 'ユーザーIDを入力してください',
            'last_name.required' => '姓を入力してください',
            'last_name.max' => '姓は20文字以内で入力してください',
            'first_name.required' => '名を入力してください',
            'first_name.max' => '名は20文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.max' => 'メールアドレスは100文字以内で入力してください',
        ];

    }
}
