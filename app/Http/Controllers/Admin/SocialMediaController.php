<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $SocialMedias = SocialMedia::all();
        return view('SocialMedia.index', compact('SocialMedias'));
    }

    public function create()
    {

        return view('SocialMedia.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=> 'required|unique:Social_Media',
                'url'=> 'required|url',
                'icon'=> 'required',
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'name.unique'=> 'هذا الاسم موجود مسبقاً',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.url'=> 'يجب ادخال رابط فقط',
                'icon.required'=> 'يجب ادخال حقل الرابط',
            ]);

        SocialMedia::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'url' => $request->url,
        ]);

        return redirect()->route('SocialMedia.index')->with('success', 'تمت الإضافة بنجاح !');
    }

    public function edit(SocialMedia $SocialMedia)
    {
        return view('SocialMedia.edit', compact('SocialMedia'));
    }

    public function update(Request $request, SocialMedia $SocialMedia)
    {
        $validated = $request->validate(
            [
                'name'=> 'required',
                'url'=> 'required|url',
                'icon'=> 'required',
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.url'=> 'يجب ادخال رابط فقط',
                'icon.required'=> 'يجب ادخال حقل الرابط',
            ]);



        $SocialMedia->update($validated);
        $SocialMedia->save();
        return redirect()->route('SocialMedia.index')->with('success', 'تم التعديل  بنجاح !');
    }

    public function destroy(SocialMedia $SocialMedia)
    {
        $SocialMedia->delete();
        return redirect()->route('SocialMedia.index')->with('success', 'تم الحذف  بنجاح !');
    }

}
