<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'hp' => 'required|min:9',
            'institusi' => 'required'
        ]);

        try{
            $register = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'hp' => $request->hp,
                'institusi' => $request->institusi
            ]);
            return redirect()->route('login')->with(['success' => 'An email has been sent to your email address containing an activation link. Please click on the link to activate your account.']);
        }catch(QueryException $e){
            return redirect()->route('register')->with(['error' => $e->errorInfo]);
        }
    }
}
