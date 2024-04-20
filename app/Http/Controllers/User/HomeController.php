<?php

namespace App\Http\Controllers\User;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\MonthlyContribution;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth()->id();
        $member = Member::with('user')->where('user_id','=',$id)->get();
        $Tcontributions = MonthlyContribution::where('user_id','=',$id)->get('amount');
        return view('members.home',['member'=>$member,'Tcontributions'=>$Tcontributions]);
    }
}
