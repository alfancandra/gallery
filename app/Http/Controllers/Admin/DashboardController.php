<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $photoCount = Photo::count();
        $categoryCount = Category::where('active',1)->count();
        $photoView = Photo::sum('reads');
        return view('admin.dashboard',compact('userCount','photoCount','photoView','categoryCount'));
    }
}
