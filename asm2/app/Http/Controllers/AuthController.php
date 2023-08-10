<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    
    public function showLoginForm()
    {
        return view('pages.signin');
    }
    public function signin(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:50',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'min:6|required_with:confirm_password|same:confirm_password',
        //     'confirm_password' => 'required|min:6' 
        // ]);
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function showRegistrationForm()
    {
        return view('pages.signup');
    }
    public function signup(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:50',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'min:6|required_with:confirm_password|same:confirm_password',
        //     'confirm_password' => 'required|min:6' 
        // ]);
        // Xử lý logic đăng kí và tạo người dùng mới
        $user = new User();
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request->password);
        $user -> save();
        return back()->with('DONE','You have registered succesfully');

        // Đăng nhập người dùng mới sau khi đăng kí
        // Auth::login($user);

        // return redirect()->intended('/');
    }
    public function logout(Request $request)
    {
        
        Auth::logout();
        return redirect()->route('login');
    }
    
}
