<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile');
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);
  
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('avatars'), $avatarName);
  
        Auth()->user()->update(['avatar'=>$avatarName]);
  
        return back()->with('success', 'Avatar updated successfully.');
    }

    public function password_update()
    {
        return view('members.password');
    }
    public function password_store(Request $request)
    {
        $request->validate([
            'password'=>['required','confirmed']
        ]);
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Password changed successfully.');
    }
}
