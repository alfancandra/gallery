<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Comment;

class PhotoCollectionController extends Controller
{
    public function photodescription($id,$title)
    {
        $photo = Photo::join('categories','categories.id','=','photos.category_id')
        ->select('photos.id as idphoto','categories.id as idcategory','photos.title','photos.deskripsi','photos.images','categories.category')
        ->where('photos.id',$id)->first();
        $foto = Photo::where('id',$id)->first();
        $comment = Comment::join('photos','photos.id','=','comments.photo_id')
        ->join('users','users.id','=','comments.user_id')
        ->where('photos.id',$id)
        ->select('comments.comment','users.name','comments.created_at as tanggal')
        ->orderBy('comments.created_at','DESC')
        ->get();
        $foto->incrementReadCount();
        return view('photo.description',compact('photo','title','comment','foto'));
    }

    public function showall()
    {
        $photo = Photo::join('categories','categories.id','=','photos.category_id')
        ->where('photos.active',1)
        ->orderBy('photos.created_at','DESC')
        ->select('photos.id as photoid','photos.title','photos.deskripsi','photos.images','categories.category')->get();
        $category = Category::where('active',1)->get();
        return view('photo.showall',compact('photo','category'));
    }

    public function showbycategory($category_id)
    {
        $photo = Photo::join('categories','categories.id','=','photos.category_id')
        ->where('photos.active',1)->where('photos.category_id',$category_id)
        ->select('photos.id as photoid','photos.title','photos.images','categories.category')->get();
        $categoryname = Category::where('id',$category_id)->first();
        $category = Category::where('active',1)->get();
        return view('photo.showbycategory',compact('photo','category','categoryname'));
    }
}
