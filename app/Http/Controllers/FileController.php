<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->hasFile('thumbnail');
        // dd($file);
        if($file){
            $newFile = $request->file('thumbnail');
            $newFile->store('images');
            dump($newFile);
        }
    }
}
