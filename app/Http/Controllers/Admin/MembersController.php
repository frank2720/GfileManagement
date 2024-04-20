<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Rules\PaymentExist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MonthlyContribution;
use App\Models\User;
use App\Rules\MemberRegistered;
use App\Rules\NotSystemUser;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function register()
    {
        return view('admin.register');
    }
    public function store_member(Request $request)
    {
        $request->validate([
            'phone'=>['required','string',new NotSystemUser,new MemberRegistered],
            'fee' => ['required','numeric','min:300'],
            'trcode' => ['required','unique:members',new PaymentExist],
        ]);
        $user_id = User::where('phone',$request->phone)->get('id');
        $membership = new Member;
        $membership->fee = $request->fee;
        $membership->trcode = $request->trcode;
        $membership->user_id = $user_id[0]->id;
        $membership->save();
        return back()->with('success', 'Member registered succefully');
    }
    public function registration_fees()
    {
        $tmembers = Member::count();
        $members = Member::with('user')->get();
        return view('admin.registrations',[
            'members'=>$members,
            'TotalMembers'=>$tmembers,
        ]);
    }

    public function add_monthly()
    {
        return view('admin.add_monthly');
    }

    public function monthly_store(Request $request)
    {
        $request->validate([
            'phone' => ['required','string',new NotSystemUser],
            'amount' => ['required','numeric'],
            'trcode' => ['required','unique:monthly_contributions',new PaymentExist],
        ],
        [
            'amount.numeric'=>'Enter valid amount',
            'amount.required'=>'Enter the amount paid',
            'trcode.unique'=>'Code transcation already updated',
            'trcode.required'=>'Transaction code required',
        ]);
        $user_id = User::where('phone',$request->phone)->get('id');
        $contribution = new MonthlyContribution;
        $contribution->amount = $request->amount;
        $contribution->trcode = $request->trcode;
        $contribution->user_id = $user_id[0]->id;
        $contribution->save();
        return back()->with('success', 'Monthly contribution added succefully');
    }
}
