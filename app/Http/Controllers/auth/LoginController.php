<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // dd('dot');
        return view('Authentication.admin.login');
    }

    /* 
    * Admin Users Login function 
    */
    public function login(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required|min:6',
        ]);

        $remember = $request->has('remember');

        if (Auth::guard('admin')->attempt($request->only('email','password'),$remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->except('password'));
    }

    /* 
    * Logout Function Help to Escape user From Login
    */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

}
