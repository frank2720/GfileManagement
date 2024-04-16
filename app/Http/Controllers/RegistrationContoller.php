<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use App\Rules\PaymentExist;
use Illuminate\Http\Request;

class RegistrationContoller extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application registration dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registrations()
    {
        $tmembers = Member::count();
        $members = Member::with('user')->paginate(8);
        return view('members.registration',[
            'TotalMembers'=>$tmembers,
            'members'=>$members,
        ]);
    }

    public function members()
    {
        $tmembers = Member::count();
        $members = Member::with('user')->paginate(8);
        //dd($members);
        return view('members.registered',[
            'TotalMembers'=>$tmembers,
            'members'=>$members,
        ]);
    }

    public function store(Request $request)
    {
        $fee = $request->validate([
            'fee' => ['required','numeric','min:300'],
            'trcode' => ['required','unique:members',new PaymentExist],
        ],
        [
            'fee.numeric'=>'Enter valid amount',
            'fee.min'=>'Membership fee is 300',
            'fee.required'=>'Enter fee paid',
            'trcode.required'=>'Transaction code required',
            'trcode.unique'=>'Code already used by a member',
        ]);
        $request->user()->fee()->create($fee);

        return redirect(route('registered.members'))->with('success', 'Registration successfull.');
    }
}
