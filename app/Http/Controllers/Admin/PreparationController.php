<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\preparation;
use Illuminate\Http\Request;

class PreparationController extends Controller
{

    public function index()
    {
        $preparations = preparation::all();
        return view('preparations.index', compact('preparations'));
    }

    public function create()
    {
        return view('preparations.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
            'name'=> 'required|unique:preparations',
            'url'=> 'required|unique:preparations|url'
        ],
        [
            'name.required'=> 'يجب ادخال حقل الاسم',
            'name.unique'=> 'هذا الاسم موجود مسبقاً',
            'url.required'=> 'يجب ادخال حقل الرابط',
            'url.unique'=> ' هذا الرابط مستخدم من قبل اسم اخر',
            'url.url'=> 'يجب ادخال رابط فقط',
        ]);

        preparation::create($validated);
        return redirect()->route('preparations.index')->with('success', 'تم إضافة التحضير بنجاح !');
    }

    public function edit(preparation $preparation)
    {
        return view('preparations.edit', compact('preparation'));
    }

    public function update(Request $request, preparation $preparation)
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

        $preparation->update($validated);
        return redirect()->route('preparations.index')->with('success', 'تم تعديل التحضير بنجاح !');
    }

    public function destroy(preparation $preparation)
    {
        $preparation->delete();
        return redirect()->route('preparations.index')->with('success', 'تم حذف التحضير بنجاح !');
    }
}
