<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Infomations;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $introduction = Infomations::find(1);
        return view('users.contact.index', compact('introduction'));
    }
    
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'description' => 'required|string',
        ], [
            'name.required' => 'Vui lòng nhập tên của bạn.',
            'name.string' => 'Tên không hợp lệ.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',
        
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
        
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 chữ số.',
        
            'description.required' => 'Vui lòng nhập nội dung.',
            'description.string' => 'Nội dung không hợp lệ.',
        ]);
        

        // Lưu vào database (nếu có model Contact)
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);


        // Chuyển hướng với thông báo thành công
        return redirect()->back()->with('success', 'Gửi liên hệ thành công!');
    }
}
