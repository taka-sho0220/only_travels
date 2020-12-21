<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:30',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'email' => 'メールアドレスの形式で入力してください。',
            'subject' => '30文字以内で入力してください。'
        ];
    }
}
