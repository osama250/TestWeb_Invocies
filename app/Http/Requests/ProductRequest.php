<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'Product_name'              => 'required|unique:prodcuts|max:255',
            'section_id'                => 'required'
        ];
    }
    public function messages() {
        return [
            'Product_name.required'     => 'يرجي ادخال اسم المنتج',
            'Product_name.unique'       => 'لا يمكن تعديل البيانات اسم المنتج مسجل مسبقا',
            'section_id.required'       => 'يجب اختيار القسم'
        ];
    }
}
