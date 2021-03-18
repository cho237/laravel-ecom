<?php

namespace App\Http\Controllers;

use App\Models\photo;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(){
        $photos = photo::all();
        return view('upload',compact('photos'));
        

    }



    public function store(Request $req){
        $size= $req->file('image')->getSize();
        $name= $req->file('image')->getClientOriginalName();
        $req->file('image')->move(public_path('images'),$name);
        
        $photo = New Photo;
        $photo->name = $name;
        $photo->size = $size;
        $photo->product_name = $req->product_name;
        $photo->price = $req->price;
        $photo->description = $req->product_description;


        $photo->save();

        return redirect()->back();
    }
}
