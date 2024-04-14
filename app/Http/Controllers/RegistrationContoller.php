<?php

namespace App\Http\Controllers;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registrations()
    {
        return view('members.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $fee = $request->validate([
            'fee' => ['required','numeric','min:300'],
            'trcode' => ['required','members:unique'],
        ]);
        $request->user()->fee()->create($fee);

        return back()->with('success', 'Registration successfull.');
    }
}
