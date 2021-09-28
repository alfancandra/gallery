<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $photo = Photo::join('categories','categories.id','=','photos.category_id')
        ->select('photos.id as idphoto','photos.title','photos.deskripsi','photos.images','categories.category','categories.active')
        ->where('photos.active',1)
        ->where('categories.active',1)
        ->orderBy('photos.created_at','DESC')->paginate(6);
        $category = Category::where('active',1)->get();
        
        return view('home',compact('photo','category'));
    }

}
