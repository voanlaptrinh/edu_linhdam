<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Lọc danh mục theo từ khóa và trạng thái (nếu có)
        $news = News::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.news.table', compact('news'))->render(),
                'pagination' => $news->links('pagination::bootstrap-4')->toHtml()
            ]);
        }

        return view('admin.news.index', compact('news'));
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'metatitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'tags' => 'nullable|json', // JSON validation for tags
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
        $news = News::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'metatitle' => $request->description,
            'metadescription' => $request->description,
            'content' => $request->content,
            'tag' => $request->tags ? json_decode($request->tags, true) : null,
            'image' => $imagePath,
        ]);
        $news->alias = Str::slug($request->name) . '-' . $news->id;
        $news->save();
        return redirect()->route('news.admin')->with('success', 'Tin tức đã được thêm thành công!');
    }
    public function edit($alias)
    {
        $news = News::where('alias', $alias)->firstOrFail();
        $tags = $news->tag;
        return view('admin.news.edit', compact('news', 'tags'));
    }
    public function detail($alias)
    {
        $news = News::where('alias', $alias)->firstOrFail();
        $tags = $news->tag;
        return view('admin.news.detail', compact('news', 'tags'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'metatitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'tags' => 'nullable|json', // JSON validation for tags
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


        $news = News::findOrFail($id);
        $alias = Str::slug($request->input('title'), '-') . '-' . $id;

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
            'metatitle' => $request->description,
            'metadescription' => $request->description,
            'content' => $request->content,
            'tag' => $request->tags ? json_decode($request->tags, true) : null,
            'image' => $imagePath,
        ]);

        return redirect()->route('news.admin')->with('success', 'Tin tức đã được cập nhật thành công!');
    }
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->images) {
            $imagePath = 'source/dataimages/' . $news->images;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $news->delete();
        return redirect()->route('news.admin')->with('success', 'Tin tức đã được xóa thành công!');
    }
}
