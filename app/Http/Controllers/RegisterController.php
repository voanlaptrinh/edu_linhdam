<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('users.auth.register');
    }

    public function register(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'email.required' => 'Email không được bỏ trống',
            'email.email' =>'Email phải đúng định dạng',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu không khớp.',
        ]);
        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

      
        return redirect()->route('login')->with('success', 'Tài khoản đã được đăng ký thành công mời đăng nhập');


    }

}
