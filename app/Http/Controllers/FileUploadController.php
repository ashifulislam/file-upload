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

    //checking the file you clicked or not
    if($request->hasFile('image'))
    {
        $file = $request->file('image');
        //grab the extention
        $name = $file->getClientOriginalName();
        //file path is defined here
        $filePath = $name;

        Storage::disk('s3')->put($filePath, file_get_contents($file));

    }
    return back()->with('Success','Image is uploaded successfully');
            
    }
    public function view_file(Request $request)
    {
       return view('view');
    }
 
    public function destroy()
    {
       return Storage::disk('s3')->delete('https://brandlyimagedev-resized.s3.ap-southeast-1.amazonaws.com/large_prince.jpg');
        // return back()->with('Success','Image is deleted successfully');

    }
}

    

