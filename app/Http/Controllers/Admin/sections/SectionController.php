<?php

namespace App\Http\Controllers\Admin\sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\http\Requests\SectionRequests;
use App\http\Requests\SectionRequestsEdit;
use App\Models\section;

class SectionController extends Controller
{

    public function store(SectionRequests $request) {
        section::create([
            'section_name' => $request->section_name,
            'description'  => $request->description,
            'Created_by'   => (Auth::user()->name),
        ]);
        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return redirect('/Sections');
    }

    public function update( SectionRequestsEdit $request) {
        $id = $request->id;                     // id of section to edit by

        $sections = section::find($id);
        $sections->update([
            'section_name' => $request->section_name,
            'description'  => $request->description,
        ]);

        session()->flash('edit','تم تعديل القسم بنجاج');
        return redirect('/Sections');
    }

    public function destroy(Request $request) {
        $id = $request->id;
        section::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('/Sections');
    }
}
