<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(){
        return view('photos.create');
    }

    public function store(Request $request){

        $file = $request->file('url');
        $validExtensions = ['png','jpeg','gif','jpg'];

        if(!is_null($file) and $file->isValid() and in_array($file->extension(), $validExtensions)){
           
            $name = $file->getClientOriginalName();
            $data = $request->all();
            $file->storeAs('img', $name);
            $data['url'] = $name;
            Photo::create($request->all());
            flash()->success('Image included!');
        }

        return view('photos.create');
        
    }

}
