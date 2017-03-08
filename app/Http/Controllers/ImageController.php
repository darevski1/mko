<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getImage()
    {
        return view('image');
    }
    public function postImage(Request $request){

         $image = $request->file('file');
         $imageName = time().$image->getClientOriginalName();
         $image->move(public_path('uploads'),$imageName);
         return response()->json(['success'=>$imageName]);




    }
}
