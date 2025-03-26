<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Course;
use App\Models\Email;
use App\Models\Infomations;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $teachers = Teacher::orderBy('created_at', 'desc')->take(4)->get();
        $infomation = Infomations::find(1);
        $courses = Course::orderBy('created_at', 'desc')->take(4)->get();
        $sliders = Banner::all();
        return view('users.home.index', compact('news','teachers','infomation','courses','sliders'));
    }
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
        ]);
        

        // Lưu vào database (nếu có model Contact)
        Email::create([
           
            'email' => $request->email,
           
        ]);


        // Chuyển hướng với thông báo thành công
        return redirect()->back()->with('success', 'Gửi liên hệ thành công!');
    }
}
