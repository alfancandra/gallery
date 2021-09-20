<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;

class PhotoController extends Controller
{
    public function index()
    {
        $photo = Photo::join('categories','photos.category_id','=','categories.id')->get();
        return view('admin.photo.photo',compact('photo'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function addphoto()
    {
        $category = Category::where('active',1)->get();
        return view('admin.photo.add',compact('category'));
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' => 'required',
            'deskripsi' =>  'required',
            'images' => 'required|max:2024',
            'images.*' => 'mimes:jpeg,jpg,png,gif',
            'category_id' => 'required'
        ]);
        if($request->hasFile('images')) {
            $resource = $request->file('images');
            $name = uniqid() . '_' . time(). '.' .$resource->getClientOriginalName();
            $resource->move(public_path().'/img/photo/', $name);  

            $file= new Photo();
            $file->title = $request->title;
            $file->deskripsi=$request->deskripsi;
            $file->images = $name;
            $file->category_id = $request->category_id;
           
            $file->save();
           return redirect()->route('adm.photoadmin')
                        ->with('success','Post deleted successfully');
        }  
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Photo::create($request->all());
    }
}