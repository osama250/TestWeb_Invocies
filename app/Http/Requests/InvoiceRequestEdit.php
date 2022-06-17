<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequestEdit extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'invoice_number'        => 'required|max:255',
            // 'invoice_Date'          => 'required',
            'Due_date'              => 'required',
            'product'               => 'required',
            // 'section_id'            => 'required',
            'Amount_collection'     => 'required',
            'Amount_Commission'     => 'required',
            'Rate_VAT'              => 'required',
        ];
    }
    public function messages()
    {
        return [
            'invoice_number.required'       => 'يرجي ادخال اسم الفاتورة',
            // 'section_id.required'           => 'يجب اختيار القسم ',
            // 'invoice_Date.required'         => 'يجب ادخال تاريخ الفاتورة',
            'Due_date.required'             => 'يجب ادخال تاريخ الاستحقاق/ الدفع' ,
            'product.required'              => 'يجب اختبار المنتج' ,
            'Amount_collection.required'    => 'يجب ادخال مبلغ التحصيل ' ,
            'Amount_Commission.required'    => 'يجب ادخال مبلغ العمولة' ,
            'Rate_VAT.required'             => 'يجب ادخال نسبة ضريبة القيمة المضافة'
        ];
    }
}
