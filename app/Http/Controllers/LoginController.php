<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home')->with('warning', 'Vui lòng đăng xuất tài khoản hiện tại trước khi đăng nhập.');
        }
    
        return view('users.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email không được bỏ trống',
            'email.email' =>  'Email phải đúng định dạng',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu ít nhất có 6 kí tự',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           

            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard.admin')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            }
        }

        return back()->withErrors(['email' => 'Thông tin đăng nhập không chính xác']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Bạn đã đăng xuất thành công');
    }
}
