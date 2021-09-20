<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $photo = Photo::where('active',1)->get();
        $category = Category::where('active',1)->get();
        return view('home',compact('photo','category'));
    }

}
