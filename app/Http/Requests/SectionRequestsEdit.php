<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequestsEdit extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id = 0;
        return [
            'section_name' => 'required|max:255|unique:sections,section_name,'.$id,
            'description'  => 'required',
        ];
    }
    public function messages() {
        return [
            'section_name.required'     =>  'يرجي ادخال اسم القسم',
            'section_name.unique'       =>  'اسم القسم مسجل مسبقا',
            'description.required'      =>  'يرجي ادخال البيان',
        ];
    }
}
