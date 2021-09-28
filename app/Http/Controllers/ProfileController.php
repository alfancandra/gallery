<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        try{
            $user = User::where('id',Auth::user()->id)->first();
            if(!empty($request->image)) {
                $request->validate([
                    'image' => 'max:2024',
                    'image.*' => 'mimes:jpeg,jpg,png,gif',
                ]);
                $resource = $request->file('image');
                $name = uniqid() . '_' . time(). '.' .$resource->getClientOriginalName();
                $resource->move(public_path().'/img/user/', $name);  
                $user->image = $name;
            }
            if(!empty($request->name)){
                $user->name = $request->name;
            }
            if(!empty($request->institusi)){
                $user->institusi = $request->institusi;
            }
            if(!empty($request->hp)){
                $user->hp = $request->hp;
            }
            if(!empty($request->password) && !empty($request->password_confirmation) && !empty($request->curpassword)){
                if(Hash::check($request->curpassword, $user->password)){
                    if($request->password == $request->password_confirmation){
                        $user->password = Hash::make($request->password);
                    }else{
                        return redirect() -> route('usr.profile') -> with(['password' => 'Password confirmation Not same!']);
                    }
                }else{
                    return redirect() -> route('usr.profile') -> with(['curpassword' => 'Current Password is wrong!']);
                }
            }
            
            $user->update();
            return redirect() -> route('usr.profile')->with(['success' => 'Success Update Profile']);
        }catch(QueryException $e){
            return redirect() -> route('usr.profile') -> with(['error' => $e->errorInfo]);
        }
    }

}
