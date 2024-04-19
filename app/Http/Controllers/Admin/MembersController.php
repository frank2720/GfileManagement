<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Rules\PaymentExist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MonthlyContribution;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    public function members(){
        $members=Member::with('user')->get();
        $Tmembers=Member::count();
        return view('admin.members',[
            'members'=>$members,
            'Tmembers'=>$Tmembers,
        ]);
    }
    public function add_member(){
        $members=Member::with('user')->get();
        $Tmembers=Member::count();
        return view('admin.add_members',[
            'members'=>$members,
            'Tmembers'=>$Tmembers,
        ]);
    }
    public function create(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable','string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' =>['required','string','unique:users'],
            'birthday' => ['required','date'],
            'gender' => ['required'],
            'fee' => ['required','numeric','min:300'],
            'trcode' => ['required','unique:members',new PaymentExist],
        ],[
            'fee.numeric'=>'Enter valid amount',
            'fee.min'=>'Membership fee is 300',
            'fee.required'=>'Enter fee paid',
            'trcode.required'=>'Transaction code required',
            'trcode.unique'=>'Code already used by a member',
        ]);
        $user =new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->save();
        $membership = new Member;
        $membership->fee = $request->fee;
        $membership->trcode = $request->trcode;
        $membership->user_id = $user->id;
        $membership->save();

        return back()->with('success', 'Member registered succefully');
    }
    public function monthly_contr()
    {
        $monthly_contributions = MonthlyContribution::with('user')->get();
        $Tmonthly_contr = MonthlyContribution::count();
        return view('admin.monthly',[
            'monthly_contributions'=>$monthly_contributions,
            'Tmonthly_contr'=>$Tmonthly_contr,
        ]);
    }
}
