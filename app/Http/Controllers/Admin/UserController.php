<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\preparation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController  extends Controller
{
    public function index(){

        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user ){
        $validated = $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'password'=> 'required|min:6',
            ],
            [
                'name.required'=> 'يجب ادخال حقل الاسم',
                'email.required'=> 'يجب ادخال حقل الرابط',
                'email.email'=> 'يجب ادخال رابط فقط'
            ]);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        $user->save();
        return redirect()->route('user.index')->with('success', 'تم تعديل بيانات المستخدم بنجاح !');
    }
}
