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
        return [  // use id that when make update i want know this id to know is section find befor or not 
            'section_name' => 'required|unique:sections,section_name,'. $this->id,
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
