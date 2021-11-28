<?php

namespace App\Http\Controllers\Admin;

use App\Models\curriculum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = curriculum::all();
        return view('curriculums.index', compact('curriculums'));
    }

    public function create()
    {
        return view('curriculums.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=> 'required|unique:curriculums',
                'url'=> 'required|unique:curriculums|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'name.unique'=> 'هذا الاسم موجود مسبقاً',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.unique'=> ' هذا الرابط مستخدم من قبل اسم اخر',
                'url.url'=> 'يجب ادخال رابط فقط',
            ]);

        curriculum::create($validated);
        return redirect()->route('curriculums.index')->with('success', 'تم إضافة المنهج بنجاح !');
    }

    public function edit(curriculum $curriculum)
    {
        return view('curriculums.edit', compact('curriculum'));
    }

    public function update(Request $request, curriculum $curriculum)
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

        $curriculum->update($validated);
        return redirect()->route('curriculums.index')->with('success', 'تم تعديل المنهج بنجاح !');
    }

    public function destroy(curriculum $curriculum)
    {
        $curriculum->delete();
        return redirect()->route('curriculums.index')->with('success', 'تم حذف المنهج بنجاح !');
    }
}
