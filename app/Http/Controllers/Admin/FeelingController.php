<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feeling;
use Illuminate\Http\Request;

class FeelingController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $isApproved = $request->input('is_approved'); // Nhận giá trị lọc
    
        $feelings = Feeling::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($isApproved !== null, function ($query) use ($isApproved) {
                return $query->where('is_approved', $isApproved);
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
    
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.feelings.table', compact('feelings'))->render(),
                'pagination' => $feelings->links('pagination::bootstrap-4')->toHtml()
            ]);
        }
    
        return view('admin.feelings.index', compact('feelings'));
    }
    
    public function create()
    {
        return view('admin.feelings.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|string',
            'content' => 'required|string|max:255',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc',
            'title.max' => 'Tiêu đề chỉ tối đa 255 kí tự',
            'rating.required' => 'Tiêu đề SEO là bắt buộc',
            'content.required' => 'Nội dung là bắt buộc',
            'content.max' => 'Nội dung chỉ tối đa 255 kí tự',


        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đặt tên file
            $image->move(public_path('source/dataimages'), $imageName); // Lưu vào public/news_images
            $imagePath = 'source/dataimages/' . $imageName; // Đường dẫn để lưu trong database
        }


        // Tạo bản ghi mới
        $news = Feeling::create([
            'title' => $request->title,
            'rating' => $request->rating,
            'is_approved' => true,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
        $news->save();
        return redirect()->route('feelings.admin')->with('success', 'Cảm nhận đã được thêm thành công!');
    }
    public function toggleApproval($id)
    {
        $feeling = Feeling::findOrFail($id);
        $feeling->is_approved = !$feeling->is_approved;
        $feeling->save();

        return response()->json(['success' => true, 'is_approved' => $feeling->is_approved]);
    }
    public function edit($id)
    {
        $feeling = Feeling::where('id', $id)->firstOrFail();

        return view('admin.feelings.edit', compact('feeling'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|string',
            'content' => 'required|string|max:255',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc',
            'title.max' => 'Tiêu đề chỉ tối đa 255 kí tự',
            'rating.required' => 'Tiêu đề SEO là bắt buộc',
            'content.required' => 'Nội dung là bắt buộc',
            'content.max' => 'Nội dung chỉ tối đa 255 kí tự',
        ]);


        $feeling = Feeling::findOrFail($id);
       

        $imagePath = $feeling->image; // Lấy đường dẫn ảnh cũ
        if ($request->hasFile('image')) {
            // Nếu bài viết đã có ảnh cũ, xóa ảnh cũ khỏi thư mục
            if ($feeling->image && file_exists(public_path($feeling->image))) {
                unlink(public_path($feeling->image));
            }

            // Lưu ảnh mới vào thư mục `public/source/dataimages`
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('source/dataimages'), $imageName);
            $imagePath = 'source/dataimages/' . $imageName;
        }

        $feeling->update([
            'title' => $request->title,
            'rating' => $request->rating,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('feelings.admin')->with('success', 'Cảm nhận đã được cập nhật thành công!');
    }
    public function destroy($id)
    {
        $feeling = Feeling::findOrFail($id);

        if ($feeling->image) {
            $imagePath = 'source/dataimages/' . $feeling->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $feeling->delete();
        return redirect()->route('feelings.admin')->with('success', 'Cảm nhận đã được xóa thành công!');
    }
}
