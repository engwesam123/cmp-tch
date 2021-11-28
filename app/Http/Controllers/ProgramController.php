<?php

namespace App\Http\Controllers;

use App\Models\Available;
use App\Models\program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = program::all();
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        $availables = Available::all();
        return view('programs.create', compact('availables'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=> 'required|unique:programs',
                'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'available_id'=> 'required',
                'url'=> 'required|unique:programs|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'name.unique'=> 'هذا الاسم موجود مسبقاً',
                'image.required'=> 'يجب تحميل الشعار',
                'available_id.required'=> 'يجب ادخال الحقل ',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.unique'=> ' هذا الرابط مستخدم من قبل اسم اخر',
                'url.url'=> 'يجب ادخال رابط فقط',
            ]);

        program::create([
            'name' => $request->name,
            'image' => $request->image->store('images', 'public'),
            'url' => $request->url,
            'available_id' => $request->available_id,
        ]);

        return redirect()->route('programs.index')->with('success', 'تم إضافة برنامج بنجاح !');
    }


    public function edit(program $program)
    {
        $availables = Available::all();
        return view('programs.edit', compact('program','availables'));
    }

    public function update(Request $request, program $program)
    {
        $validated = $request->validate(
            [
                'name'=> 'required',
                'image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
                'available_id'=> 'required',
                'url'=> 'required|url'
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'available_id.required'=> 'يجب ادخال الحقل ',
                'url.required'=> 'يجب ادخال حقل الرابط',
                'url.url'=> 'يجب ادخال رابط فقط',
            ]);

        $data = $request->only(['name', 'available_id', 'url']);
        if ($request->hasFile('image')) {
            $image = $request->image->store('images', 'public');
            Storage::disk('public')->delete($program->image);
            $data['image'] = $image;
        }

        $program->update($data);
        $program->save();
        return redirect()->route('programs.index')->with('success', 'تم تعديل البرنامج بنجاح !');
    }

    public function destroy(program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'تم حذف البرنامج بنجاح !');
    }
}
