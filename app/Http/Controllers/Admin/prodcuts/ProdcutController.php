<?php

namespace App\Http\Controllers\Admin\prodcuts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProdcutRequest;
use App\Http\Requests\ProductRequestEdit;
use App\Models\prodcut;
use App\Models\section;

class ProdcutController extends Controller
{

    public function store(ProdcutRequest $request) {
        prodcut::create([
            'Product_name'  => $request->Product_name,
            'section_id'    => $request->section_id,
            'description'   => $request->description,
        ]);

        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/Prodcuts');
    }

    public function update( ProductRequestEdit $request , $id ) {
         // get id for setion now where name = request name when edit
        $id = section::where('section_name', $request->section_name)->first()->id;

        $Products = prodcut::findOrFail($request->pro_id);

        $Products->update([
            'Product_name'  => $request->Product_name,
            'description'   => $request->description,
            'section_id'    => $id,
        ]);

        session()->flash('Edit', 'تم تعديل المنتج بنجاح');
        return back();
    }

    public function destroy(Request $request) {
        $Products = prodcut::findOrFail($request->pro_id);
        $Products->delete();
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
