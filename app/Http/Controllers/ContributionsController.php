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
        //$id = Auth()->id();
        //$member = Member::with('user')->find($id)??'Not registered';
        return view('members.monthly');
    }

    public function store_monthly_contr(Request $request)
    {
        $amount=$request->validate([
            'amount' => ['required','numeric'],
            'trcode' => ['required',new PaymentExist],
        ],
        [
            'amount.numeric'=>'Enter valid amount',
            'amount.required'=>'Enter the amount paid',
            'trcode.required'=>'Transaction code required',
        ]);
        $request->user()->monthly()->create($amount);

        return back()->with('success', 'Thank you for making the monthly payment');
    }
}
