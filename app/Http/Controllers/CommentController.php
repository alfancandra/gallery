<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,$id_photo,$id_user)
    {
        if(Auth::user()){
            // validasi data
            $request->validate([
                'comment' => 'required'
            ]);
            $comment = Comment::create([
                'user_id' => $id_user,
                'photo_id' => $id_photo,
                'comment' => $request->comment
            ]);
            return back();
        }else{
            return redirect()->route('login')->with(['success' => 'Login Terlebih dahulu']);
        }
        
    }
}
