<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GagRequest extends FormRequest
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
            'text' => 'required|string|min:5|max:50|unique:gags',
            'yomi' => 'required|string|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'text.min' => 'だじゃれテキストは5文字以上にしてください',
            'text.max' => 'だじゃれテキストは50文字以下にしてください',
            'text.unique' => 'だじゃれテキストが他のだじゃれと重複しています',
            'yomi.min' => '読みは5文字以上にしてください',
            'yomi.max' => '読みは50文字以下にしてください',
        ];
    }
}
