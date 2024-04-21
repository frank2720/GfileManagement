<?php

namespace App\Http\Controllers\User;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $documents = Document::with('user')->get();
        return view('members.documents',[
            'documents'=>$documents,
        ]);
    }
}
