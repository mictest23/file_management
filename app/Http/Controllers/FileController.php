<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function test(Request $request){
        $request->validate([
            'email' => 'required',
            'file' => 'required|max:2048',
           ]);

        $fileName = $request->file->getClientOriginalName();  
        // $request->file->move(public_path('uploads'), $fileName);          //public folder
        $request->file->storeAs('public/uploads', $fileName);                //storage folder
    }


    // public function delete(){
    //     $filedeleted = unlink(public_path('uploads/1684223317.pdf'));
    // }



    public function table(Request $request){
        $directory = "public";
        $files = Storage::allFiles($directory);

        return view('table', ['files' => $files]);
    }
}
