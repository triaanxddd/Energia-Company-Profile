<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $profile = User::where('id', auth()->user()->id)->first();

        return view('admin.profile.index', compact('profile'));
    }

    public function update(Request $request){
        $validateData = $request->validate([
            "name" => "required|max:100",
            "email" => "required|email",
            "password" => "required",
            "repassword" => "required"
        ]);
        $password = $validateData['password'];
        $repassword = $validateData['repassword'];

        if($password != $repassword){
            return redirect()->back()->with('danger', 'Password Tidak Sama');
        }
        $validateData['password'] = Hash::make($request->password);
        $validateData['seen_password'] = $password;

        $user = User::find(auth()->user()->id);
        $user->update($validateData);

        return redirect()->back()->with('success', 'Profil Anda Telah diubah');
    }
}
