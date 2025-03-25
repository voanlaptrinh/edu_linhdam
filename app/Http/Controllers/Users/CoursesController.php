<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\News;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        // $courses = Course::orderBy('created_at', 'desc')->paginate(6);
        $search = $request->input('search');

        $courses = Course::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(6);

        if ($request->ajax()) {
            return response()->json([
                'table' => view('users.courses.table', compact('courses'))->render(),
                'pagination' => $courses->links('pagination::bootstrap-4')->toHtml()
            ]);
        }
        return view('users.courses.index', compact('courses'));
    }
    public function detail($alias)
    {
        $news = Course::where('alias', $alias)->firstOrFail();
        $newsLatest = News::orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('users.courses.detail', compact('news','newsLatest','courses'));
    }
}
