<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Validators\ProductValidator;


class ProductRequest extends FormRequest
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
          'product_name' => 'required|string|max:50',
          'price' => 'required|integer|hello',
          'brand_id' => 'integer',
//          'brand_id' => 'nullable|string|max:50',
        ];
/*
名前	ルール
required	必須入力
string	文字列のみ
max:50	50文字以下
integer	数値のみ
nullable	空もOK
*/
    }

    public function messages()
    {
        return [
          'product_name.required' => 'dddddddderrrrrrrror!!',
          'price.hello' => 'woo!!',

        ];
    }

}
