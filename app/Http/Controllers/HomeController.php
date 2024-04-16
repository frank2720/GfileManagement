<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\MonthlyContribution;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth()->id();
        $member = Member::with('user')->find($id)??'Not registered';
        $Tcontributions = MonthlyContribution::where('user_id','=',$id)->get('amount');
        return view('members.home',['member'=>$member,'Tcontributions'=>$Tcontributions]);
    }
}
