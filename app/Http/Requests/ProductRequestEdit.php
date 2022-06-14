<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestEdit extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id  = 0;
        return [
            // 'Product_name'              => 'required|unique:prodcuts|max:255' ,
            'Product_name'              => 'required|max:255' ,
            'description'               => 'required',
            'section_id'                => 'unique:prodcuts'
        ];
    }
    public function messages() {
        return [
            'Product_name.required'     => 'يرجي ادخال اسم المنتج',
            // 'Product_name.unique'       => 'اسم المنتج مسجل مسبقا',
            'description.required'      => 'يرجي ادخال الوصف',
            'section_id.unique'         => 'مسجل من قبل '
        ];
    }
}
