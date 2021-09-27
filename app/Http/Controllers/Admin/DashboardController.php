<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $photoCount = Photo::count();
        $categoryCount = Category::where('active',1)->count();
        $photoView = Photo::sum('reads');
        $comments = Comment::join('photos','photos.id','=','comments.photo_id')
        ->join('users','users.id','=','comments.user_id')
        ->orderBy('comments.created_at','DESC')
        ->select('photos.id as photoid','photos.title','users.name','comments.comment','comments.created_at as commentdate')
        ->paginate(4);
        return view('admin.dashboard',compact('userCount','photoCount','photoView','categoryCount','comments'));
    }
}
