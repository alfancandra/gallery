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
        $photo = Photo::join('categories','photos.category_id','=','categories.id')
        ->select('photos.id as idphoto','photos.reads','photos.active as photoactive','photos.title','photos.deskripsi','photos.images','categories.category')
        ->get();
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
            foreach($request->file('images') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }

            $file= new Photo();
            $file->title = $request->title;
            $file->deskripsi=$request->deskripsi;
            $file->images = json_encode($data);
            $file->category_id = $request->category_id;

            $file->save();
           return redirect()->route('adm.photoadmin')
                        ->with('success','Photo Added successfully');
        }

        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Photo::create($request->all());
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->route('adm.photoadmin')
                        ->with('success','Success Deleted Photo');
    }

    public function show($id)
    {
        $photo = Photo::join('categories','photos.category_id','=','categories.id')
        ->select('photos.id as idphoto','photos.active as photoactive','photos.reads','photos.title','photos.deskripsi','photos.images','categories.category')
        ->where('photos.id',$id)
        ->first();
        return view('admin.photo.show',compact('photo'));
    }

    public function edit($id)
    {
        $photo = Photo::where('id',$id)->first();
        $category = Category::where('active',1)->get();
        return view('admin.photo.edit',compact('photo','category'));
    }

    public function update(Request $request,$id)
    {
        // Validasi
        $request->validate([
            'title' => 'required',
            'deskripsi' =>  'required',
            'category_id' => 'required'
        ]);
        $photo = Photo::find($id);
        $photo->title = $request->title;
        $photo->deskripsi = $request->deskripsi;
        $photo->category_id = $request->category_id;
        $photo->save();
        return redirect()->route('adm.photoadmin')
                        ->with('success','Update successfully');
    }

    public function active($id)
    {
        $photo = Photo::find($id);
        $photo->active=1;
        $photo->save();
        return redirect()->route('adm.photoadmin')
                        ->with('success','Active successfully');
    }

    public function deactive($id)
    {
        $photo = Photo::find($id);
        $photo->active=0;
        $photo->save();
        return redirect()->route('adm.photoadmin')
                        ->with('success','Deactive successfully');
    }
}
