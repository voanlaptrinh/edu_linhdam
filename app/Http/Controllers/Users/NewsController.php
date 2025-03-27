<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('users.news.index', compact('news'));
    }
    public function detail($alias)
    {
        $news = News::where('alias', $alias)->firstOrFail();
        $newsLatest = News::where('id', '!=', $news->id)
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
        $courses =Course::orderBy('created_at', 'desc')->paginate(6);
        $news->increment('views');
        $tags = $news->tag;
        return view('users.news.detail', compact('news', 'tags','newsLatest','courses'));
    }
}
