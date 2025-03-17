<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Lọc danh mục theo từ khóa và trạng thái (nếu có)
        $courses = Course::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.courses.table', compact('courses'))->render(),
                'pagination' => $courses->links('pagination::bootstrap-4')->toHtml()
            ]);
        }

        return view('admin.courses.index', compact('courses'));
    }
    public function create()
    {
        return view('admin.courses.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'metatitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'content' => 'nullable|string',
          
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Max 1MB
        ], [
            'name.required' => 'Tiêu đề là bắt buộc',
            'name.max' => 'Tiêu đề chỉ tối đa 255 kí tự',
            'metatitle.required' => 'Tiêu đề SEO là bắt buộc',
            'metatitle.max' => 'Tiêu đề SEO chỉ tối đa 255 kí tự',
            'metadescription.required' => 'Mô tả ngắn SEO là bắt buộc',
            'metadescription.max' => 'Mô tả ngắn SEO chỉ tối đa 255 kí tự',
            'description.max' => 'Mô tả ngắn tối đa 255 kí tự',
            'image.image' => 'Nội dung tải lên phải là dạng ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',

        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đặt tên file
            $image->move(public_path('source/dataimages'), $imageName); // Lưu vào public/news_images
            $imagePath = 'source/dataimages/' . $imageName; // Đường dẫn để lưu trong database
        }


        // Tạo bản ghi mới
        $news = Course::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'metatitle' => $request->description,
            'metadescription' => $request->description,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
        $news->alias = Str::slug($request->name) . '-' . time();
        $news->save();
        return redirect()->route('courses.admin')->with('success', 'Bản tin khóa học đã được thêm thành công!');
    }
    public function edit($alias)
    {
        $courses = Course::where('alias', $alias)->firstOrFail();
        $tags = $courses->tag;
        return view('admin.courses.edit', compact('courses', 'tags'));
    }
    public function detail($alias)
    {
        $courses = Course::where('alias', $alias)->firstOrFail();
        $tags = $courses->tag;
        return view('admin.courses.detail', compact('courses', 'tags'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'metatitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'content' => 'nullable|string',
         
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Max 1MB
        ], [
            'name.required' => 'Tiêu đề là bắt buộc',
            'name.max' => 'Tiêu đề chỉ tối đa 255 kí tự',
            'metatitle.required' => 'Tiêu đề SEO là bắt buộc',
            'metatitle.max' => 'Tiêu đề SEO chỉ tối đa 255 kí tự',
            'metadescription.required' => 'Mô tả ngắn SEO là bắt buộc',
            'metadescription.max' => 'Mô tả ngắn SEO chỉ tối đa 255 kí tự',
            'description.max' => 'Mô tả ngắn tối đa 255 kí tự',
            'image.image' => 'Nội dung tải lên phải là dạng ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',

        ]);


        $news = Course::findOrFail($id);
        $alias = Str::slug($request->input('name'), '-') . '-' . time();

        $imagePath = $news->image; // Lấy đường dẫn ảnh cũ
        if ($request->hasFile('image')) {
            // Nếu bài viết đã có ảnh cũ, xóa ảnh cũ khỏi thư mục
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            // Lưu ảnh mới vào thư mục `public/source/dataimages`
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('source/dataimages'), $imageName);
            $imagePath = 'source/dataimages/' . $imageName;
        }

        $news->update([
            'name' => $request->name,
            'alias' => $alias,
            'description' => $request->description,
            'metatitle' => $request->metatitle,
            'metadescription' => $request->metadescription,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('courses.admin')->with('success', 'Bản tin khóa học đã được cập nhật thành công!');
    }
    public function destroy($id)
    {
        $news = Course::findOrFail($id);

        if ($news->image) {
            $imagePath = 'source/dataimages/' . $news->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $news->delete();
        return redirect()->route('courses.admin')->with('success', 'Bản tin khóa học đã được xóa thành công!');
    }

}
