<?php

namespace App\Http\Controllers;

use App\Models\CurriculumDistribution;
use Illuminate\Http\Request;

class CurriculumDistributionController extends Controller
{
    public function index()
    {
        $curriculumsDis = CurriculumDistribution::all();
        return view('curriculum-distribution.index', compact('curriculumsDis'));
    }

    public function create()
    {
        return view('curriculum-distribution.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=> 'required|unique:curriculum_distributions',
                'url'=> 'required|unique:curriculum_distributions|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'name.unique'=> 'هذا الاسم موجود مسبقاً',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.unique'=> ' هذا الرابط مستخدم من قبل اسم اخر',
                'url.url'=> 'يجب ادخال رابط فقط',
            ]);

        CurriculumDistribution::create($validated);
        return redirect()->route('curriculum-distributions.index')->with('success', 'تم إضافة المنهج بنجاح !');
    }


    public function edit(CurriculumDistribution $curriculum_distribution)
    {
        return view('curriculum-distribution.edit', compact('curriculum_distribution'));
    }

    public function update(Request $request, CurriculumDistribution $curriculum_distribution)
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

        $curriculum_distribution->update($validated);
        return redirect()->route('curriculum-distributions.index')->with('success', 'تم تعديل المنهج بنجاح !');
    }

    public function destroy(CurriculumDistribution $curriculum_distribution)
    {
        $curriculum_distribution->delete();
        return redirect()->route('curriculum-distributions.index')->with('success', 'تم حذف المنهج بنجاح !');
    }
}
