<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required|integer|max:255',
        ];
    }

    public function name(): string
    {
        return $this->input('name');
    }

    public function price(): int
    {
        return $this->input('price');
    }

    public function attributes()
    {
        return [
            'name' => '名前',
            'price' => '値段'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attributeを入力してください。',
            'name.max' => ':attributeは255字以下で入力してください。',
            'price.required' => ':attributeを入力してください。',
            'price.integer' => ':attributeは数字で入力してください。',
            'price.max' => ':attributeは255字以下で入力してください。',
        ];
    }
}
