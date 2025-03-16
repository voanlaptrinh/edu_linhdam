<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

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
}
