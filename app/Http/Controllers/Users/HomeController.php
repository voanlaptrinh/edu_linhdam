<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Course;
use App\Models\Email;
use App\Models\Feeling;
use App\Models\Infomations;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function index(Request $request)
    {
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $teachers = Teacher::orderBy('created_at', 'desc')->take(4)->get();
        $infomation = Infomations::find(1);
        $courses = Course::orderBy('created_at', 'desc')->take(4)->get();
        $sliders = Banner::all();
        $feelings = Feeling::where('is_approved', 1)->orderBy('created_at', 'desc')->paginate(8);

        return view('users.home.index', compact('news','teachers','infomation','courses','sliders','feelings'));
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
    public function profile(){
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem trang này.');
        }
        return view('users.auth.profile');
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:10',
            'gender' => 'nullable|in:male,female',
            'date_of_birth' => 'nullable|date',
            'zalo' => 'nullable|url',
            'facebook' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif'
        ]);
        $imagePath = $user->image; // Lấy đường dẫn ảnh cũ
        // Xử lý ảnh nếu có
        if ($request->hasFile('image')) {
            // Nếu bài viết đã có ảnh cũ, xóa ảnh cũ khỏi thư mục
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }

            // Lưu ảnh mới vào thư mục `public/source/dataimages`
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('source/dataimages'), $imageName);
            $imagePath = 'source/dataimages/' . $imageName;
        }
        

        // Cập nhật thông tin
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'zalo' => $request->zalo,
            'facebook' => $request->facebook,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Cập nhật thông tin thành công!');
    }
}
