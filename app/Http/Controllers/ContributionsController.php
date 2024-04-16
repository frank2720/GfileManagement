<?php

namespace App\Http\Controllers;

use App\Models\MonthlyContribution;
use App\Rules\PaymentExist;
use Illuminate\Http\Request;

class ContributionsController extends Controller
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
     * function for monthly contribution.
     */
    public function monthly_contr()
    {
        $id = Auth()->id();
        $contributions = MonthlyContribution::with('user')->where('user_id','=',$id)->get();
        $Tcontributions = MonthlyContribution::where('user_id','=',$id)->get('amount');
        return view('members.monthly',['contributions'=>$contributions,'Tcontributions'=>$Tcontributions]);
    }

    public function store_monthly_contr(Request $request)
    {
        $amount=$request->validate([
            'amount' => ['required','numeric'],
            'trcode' => ['required','unique:monthly_contributions',new PaymentExist],
        ],
        [
            'amount.numeric'=>'Enter valid amount',
            'amount.required'=>'Enter the amount paid',
            'trcode.unique'=>'Code transcation already updated',
            'trcode.required'=>'Transaction code required',
        ]);
        $request->user()->monthly()->create($amount);

        return back()->with('success', 'Thank you for making the monthly payment');
    }
}
