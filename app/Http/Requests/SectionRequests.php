<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequests extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'section_name'              => 'required|unique:sections|max:255',
            'description'               => 'required',
        ];
    }

    public function messages() {
        return [
            'section_name.required'     => 'يرجي ادخال اسم القسم',
            'section_name.unique'       => 'اسم القسم مسجل مسبقا',
            'description.required'      => 'يرجي ادخال الوصف الخاص بالسقم ',
        ];
    }
}
