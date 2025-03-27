<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Feeling;
use Illuminate\Http\Request;

class FeelingController extends Controller
{
    public function index(Request $request)
    {
        $feelings = Feeling::where('is_approved', 1)->orderBy('created_at', 'desc')->paginate(8);
        if ($request->ajax()) {
            return response()->json([
                'table' => view('users.feeling.table', compact('feelings'))->render(),
                'pagination' => $feelings->links('pagination::bootstrap-4')->toHtml()
            ]);
        }
        return view('users.feeling.index',compact('feelings'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string',
        ], [
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Chỉ chấp nhận định dạng jpeg, png, jpg, gif, svg.',
            'title.required' => 'Tiêu đề không được để trống.',
            'title.string' => 'Tiêu đề phải là một chuỗi ký tự hợp lệ.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'rating.required' => 'Vui lòng chọn số sao.',
            'rating.integer' => 'Số sao phải là một số nguyên.',
            'rating.min' => 'Số sao tối thiểu là 1.',
            'rating.max' => 'Số sao tối đa là 5.',
            'content.required' => 'Vui lòng nhập nội dung đánh giá.',
            'content.string' => 'Nội dung đánh giá phải là một chuỗi ký tự hợp lệ.',
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('source/dataimages'), $imageName);
            $imagePath = 'source/dataimages/' . $imageName;
        }

        Feeling::create([
            'image' => $imagePath,
            'title' => $request->title,
            'rating' => $request->rating,
            'content' => $request->content,
            'is_approved' => false, // Đánh giá cần duyệt trước khi hiển thị
        ]);

        return back()->with('success', 'Đánh giá của bạn đã được gửi và đang chờ phê duyệt.');
    }
}
