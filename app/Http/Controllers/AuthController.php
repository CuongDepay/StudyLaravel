<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Session;
use Config;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $expiresAt = now()->addMinutes(Config::get('session.lifetime'));
            // Lưu session ID vào bảng Session
            $session = new Session();
            $session->user_id = Auth::user()->id;
            $session->session_id = $request->session()->getId();
            $session->expires_at = $expiresAt;
            $session->save();

            // Đăng nhập thành công
            return redirect()->intended('/welcome');
        }

        // Đăng nhập thất bại
        return back()->withErrors(['email' => 'Đăng nhập không thành công.'])->withInput();
    }
    public function logout(Request $request)
    {
        Session::where('session_id', $request->session()->getId())->delete();
        Auth::logout();
        return redirect('/login');
    }
}
