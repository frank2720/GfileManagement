<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MonthlyContribution;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $Tmembers = Member::count();
        $MonthlyContributions = MonthlyContribution::get('amount');
        $TmembershipFee = Member::get('fee');
        return view('admin.index',[
            'Tmembers'=>$Tmembers,
            'MonthlyContributions'=>$MonthlyContributions,
            'TmembershipFee'=>$TmembershipFee,
        ]);
    }
}
