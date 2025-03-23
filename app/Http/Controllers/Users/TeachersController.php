<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::all();
        return view('users.teachers.index', compact('teachers'));
    }
    public function detail($alias)
    {
        $teacher = Teacher::where('alias', $alias)->first();
        return view('users.teachers.detail', compact('teacher'));
    }
}
