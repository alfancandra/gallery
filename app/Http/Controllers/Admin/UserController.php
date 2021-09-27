<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        $users = User::where('role_id',0)->paginate(10);
        return view('admin.user.index',compact('users'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function admin()
    {
        $users = User::where('role_id',1)->paginate(10);
        return view('admin.admin.index',compact('users'))
        ->with('i',(request()->input('page',1)-1)*5);
    }
}
