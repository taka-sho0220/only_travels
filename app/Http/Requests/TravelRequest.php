<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelRequest extends FormRequest
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
            'place' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'evaluation' => 'required',
            'impressions' => 'required',
            'photos' => 'image',
            'terms' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'image' => '指定されたファイルが画像(jpg,png,bmg,gif,svg)ではありません。',
        ];
    }
}
