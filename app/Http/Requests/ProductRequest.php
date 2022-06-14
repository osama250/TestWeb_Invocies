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
            'Product_name'              => 'required|unique:prodcuts|max:255' ,
            'description'               => 'required',
            'section_id'                => 'required'
        ];
    }
    public function messages() {
        return [
            'Product_name.required'     => 'يرجي ادخال اسم المنتج',
            'Product_name.unique'       => 'اسم المنج مسجل مسبقا',
            'description.required'      => 'يرجي ادخال الوصف',
            'section_id.required'       => 'يجب اختيار القسم'
        ];
    }
}
