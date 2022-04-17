<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\FileUpload;


class FileUploadController extends Controller
{
    public function upload_file()
    {
        return view('upload_file');
    }
    public function store(Request $request)
    {
    // $request->validate($request,[
    //     'image' => 'required|image|max:2048'
    // ]);

    //checking the file you clicked or not
    if($request->hasFile('image'))
    {
        $file = $request->file('image');
        //grab the extention
        $name = time().$file->getClientOriginalName();
        //file path is defined here
        $filePath = $name;

        Storage::disk('s3')->put($filePath, file_get_contents($file));

    }
    return back()->with('Success','Image is uploaded successfully');
            
    }
}
