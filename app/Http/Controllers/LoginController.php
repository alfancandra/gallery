<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try{
            $akun = $request->only('email','password');
            if(Auth::attempt($akun)){
                $AuthUser = Auth::user();
                if(Auth::user()->role_id==1){
                    return redirect() -> route('adm.dashboardadmin');
                }else{
                    return redirect() -> route('home');
                }
            } else {
                return redirect() -> route('login') -> with(['error' => 'Wrong email or password!']);
            }
        }catch(QueryException $e){
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect() -> route('login') -> with(['error' => $e->errorInfo]);
        }

    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
