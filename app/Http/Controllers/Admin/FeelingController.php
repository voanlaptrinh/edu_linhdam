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

        // Lọc danh mục theo từ khóa và trạng thái (nếu có)
        $feelings = Feeling::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
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
}
