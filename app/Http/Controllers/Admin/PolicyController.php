<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PolicyController extends Controller
{
    public function index(Request $request)
    {
        $policys = Policy::all();
        return view('admin.policys.index', compact('policys'));
    }
    public function edit($alias)
    {
        $policy = Policy::where('alias',  $alias)->firstOrFail();
        return view('admin.policys.edit', compact('policy'));
    }
    public function update(Request $request, $id)
    {
    // Tìm sản phẩm theo ID
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'nullable'
            
        ], [
            'name.required' => 'Tiêu đề là bắt buộc.',
            'name.string' => 'Tiêu đề phải là chuỗi.',
            'name.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
           
        ]);

        $policy = Policy::findOrFail($id);
        $policy->update([
            'name' => $request->name,
            'content' => $request->content,
            'alias' => Str::slug($request->name) . '-' . $policy->id,

        ]);
        return redirect()->route('policys.admin')->with('success', 'Tin tức đã được cập nhật thành công!');

    }
}
