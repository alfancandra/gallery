<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user()
    {
        $users = User::where('role_id',0)->paginate(10);
        return view('admin.user.index',compact('users'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function destroyuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('adm.user')->with('success','Success Delete User');
    }

    public function admin()
    {
        $users = User::where('role_id',1)->paginate(10);
        return view('admin.admin.index',compact('users'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function addAdmin()
    {
        return view('admin.admin.add');
    }

    public function storeadmin(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'name' => 'required',
            'institusi' => 'required'
        ]);

        try{
            $create = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'institusi' => $request->institusi,
                'role_id' => 1
            ]);
            return redirect()->route('adm.useradmin')->with(['success' => 'Success Add Admin']);
        }catch(QueryException $e){
            return redirect()->route('adm.useradmin')->with(['error' => $e->errorInfo]);
        }
    }

    public function destroyadmin($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('adm.useradmin')->with('success','Success Delete User');
    }
}
