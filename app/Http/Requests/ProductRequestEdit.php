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
        return [
            'Product_name'              => 'required|unique:prodcuts,Product_name,'. $this->id ,
            'description'               => 'required',
            'section_id'                => 'unique:prodcuts'
        ];
    }
    public function messages() {
        return [
            'Product_name.required'     => 'يرجي ادخال اسم المنتج',
            'Product_name.unique'       => 'لا يمكن تعديل البيانات اسم المنتج مسجل مسبقا',
            'description.required'      => 'يرجي ادخال الوصف',
            'section_id.unique'         => 'مسجل من قبل '
        ];
    }
}
