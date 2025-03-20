<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infomations;
use Illuminate\Http\Request;

class InfomationController extends Controller
{
    public function index(Request $request)
    {
        $imfomations = Infomations::find(1);
        return view('admin.infomation.index', compact('imfomations'));
    }
    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            // Add validation for other fields
        ], [
            'name.required' => 'Vui lòng nhập tên.',
            'name.string' => 'Tên phải là một chuỗi.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'description.string' => 'Mô tả phải là một chuỗi.',
            'content.required' => 'Vui lòng nhập nội dung.',
            'content.string' => 'Nội dung phải là một chuỗi.',
        ]);

        // Find the existing Infomations model based on some criteria (you might use ID or some unique identifier)
        $infomations = Infomations::find(1);
        $imagePath = $infomations->image; // Lấy đường dẫn ảnh cũ
        if ($request->hasFile('image')) {
            // Nếu bài viết đã có ảnh cũ, xóa ảnh cũ khỏi thư mục
            if ($infomations->image && file_exists(public_path($infomations->image))) {
                unlink(public_path($infomations->image));
            }

            // Lưu ảnh mới vào thư mục `public/source/dataimages`
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('source/dataimages'), $imageName);
            $imagePath = 'source/dataimages/' . $imageName;
        }

        // Update the model with the validated data
        $infomations->name = $request->name;
        $infomations->description = $request->description;
        $infomations->content = $request->content;
        $infomations->image = $imagePath;
      
        // Update other fields

        // Save the model to the database
        $infomations->save();

        // Redirect the user back to the form with a success message
        return redirect()->back()->with('success', 'Về chúng tôi đã cập nhật thành công');
    }
}
