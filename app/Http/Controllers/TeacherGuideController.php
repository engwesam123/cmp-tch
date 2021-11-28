<?php

namespace App\Http\Controllers;

use App\Models\teacherGuide;
use Illuminate\Http\Request;

class TeacherGuideController extends Controller
{

    public function index()
    {
        $teacherGuides = teacherGuide::all();
        return view('teacherGuides.index', compact('teacherGuides'));
    }

    public function create()
    {
        return view('teacherGuides.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=> 'required|unique:teacher_guides',
                'url'=> 'required|unique:teacher_guides|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'name.unique'=> 'هذا الاسم موجود مسبقاً',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.unique'=> ' هذا الرابط مستخدم من قبل اسم اخر',
                'url.url'=> 'يجب ادخال رابط فقط',
            ]);

        teacherGuide::create($validated);
        return redirect()->route('teacherGuides.index')->with('success', 'تم إضافة عرض تقديمي بنجاح !');
    }


    public function edit(teacherGuide $teacherGuide)
    {
        return view('teacherGuides.edit', compact('teacherGuide'));
    }

    public function update(Request $request, teacherGuide $teacherGuide)
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

        $teacherGuide->update($validated);
        return redirect()->route('teacherGuides.index')->with('success', 'تم تعديل العرض التقديمي بنجاح !');
    }

    public function destroy(teacherGuide $teacherGuide)
    {
        $teacherGuide->delete();
        return redirect()->route('teacherGuides.index')->with('success', 'تم حذف العرض التقديمي بنجاح !');
    }
}
