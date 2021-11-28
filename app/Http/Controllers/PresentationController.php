<?php

namespace App\Http\Controllers;

use App\Models\presentation;
use Illuminate\Http\Request;

class PresentationController extends Controller
{

    public function index()
    {
        $presentations = presentation::all();
        return view('presentations.index', compact('presentations'));
    }

    public function create()
    {
        return view('presentations.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=> 'required|unique:presentations',
                'url'=> 'required|unique:presentations|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'name.unique'=> 'هذا الاسم موجود مسبقاً',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.unique'=> ' هذا الرابط مستخدم من قبل اسم اخر',
                'url.url'=> 'يجب ادخال رابط فقط',
            ]);

        presentation::create($validated);
        return redirect()->route('presentations.index')->with('success', 'تم إضافة عرض تقديمي بنجاح !');
    }


    public function edit(presentation $presentation)
    {
        return view('presentations.edit', compact('presentation'));
    }

    public function update(Request $request, presentation $presentation)
    {
        $validated = $request->validate(
            [
                'name'=> 'required',
                'url'=> 'required|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.url'=> 'يجب ادخال رابط فقط'
            ]);

        $presentation->update($validated);
        return redirect()->route('presentations.index')->with('success', 'تم تعديل العرض التقديمي بنجاح !');
    }

    public function destroy(presentation $presentation)
    {
        $presentation->delete();
        return redirect()->route('presentations.index')->with('success', 'تم حذف العرض التقديمي بنجاح !');
    }
}
