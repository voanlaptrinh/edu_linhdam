<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Lọc danh mục theo từ khóa và trạng thái (nếu có)
        $banners = Banner::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.banner.table', compact('banners'))->render(),
                'pagination' => $banners->links('pagination::bootstrap-4')->toHtml()
            ]);
        }

        return view('admin.banner.index', compact('banners'));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'link' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Max 1MB
        ], [
            'name.required' => 'Tiêu đề là bắt buộc',
            'name.max' => 'Tiêu đề chỉ tối đa 255 kí tự',
            'description.max' => 'Mô tả ngắn tối đa 255 kí tự',
            'image.image' => 'Nội dung tải lên phải là dạng ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',

        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đặt tên file
            $image->move(public_path('/source/dataimages'), $imageName); // Lưu vào public/news_images
            $imagePath = '/  source/dataimages/' . $imageName; // Đường dẫn để lưu trong database
        }


        // Tạo bản ghi mới
        $banner = Banner::create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->description,
            'image' => $imagePath,
        ]);
      
        $banner->save();
        return redirect()->route('banner.admin')->with('success', 'Banner đã được thêm thành công!');
    }
    public function edit($id)
    {
        $banner = Banner::where('id', $id)->firstOrFail();
     
        return view('admin.banner.edit', compact('banner'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'link' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Max 1MB
        ], [
            'name.required' => 'Tiêu đề là bắt buộc',
            'name.max' => 'Tiêu đề chỉ tối đa 255 kí tự',
            'description.max' => 'Mô tả ngắn tối đa 255 kí tự',
            'image.image' => 'Nội dung tải lên phải là dạng ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',

        ]);


        $banner = Banner::findOrFail($id);
       

        $imagePath = $banner->image; // Lấy đường dẫn ảnh cũ
        if ($request->hasFile('image')) {
            // Nếu bài viết đã có ảnh cũ, xóa ảnh cũ khỏi thư mục
            if ($banner->image && file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }

            // Lưu ảnh mới vào thư mục `public/source/dataimages`
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/source/dataimages'), $imageName);
            $imagePath = '/source/dataimages/' . $imageName;
        }

        $banner->update([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $imagePath,
        ]);

        return redirect()->route('banner.admin')->with('success', 'Banner đã được cập nhật thành công!');
    }
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
    
        if ($banner->image && file_exists(public_path($banner->image))) {
            unlink(public_path($banner->image));
        }
    
        $banner->delete();
    
        return redirect()->route('banner.admin')->with('success', 'Banner đã được xóa.');
    }
}
