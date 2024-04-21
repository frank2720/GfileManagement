<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $documents = Document::with('user')->get();
        return view('admin.documents',[
            'documents'=>$documents,
        ]);
    }

    public  function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'document'=>['required','file']
        ]);
        $file_path = Storage::disk('public')->put('meetings/reports',$request->file('document'));
        $file = new Document;
        $file->name =  $request->name;
        $file->document = $file_path;
        $file->user_id =  Auth()->id();
        $file->save();
        return back()->with('success','Document uploaded successfully');
    }
}
