<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Lọc danh mục theo từ khóa và trạng thái (nếu có)
        $teachers = Teacher::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.teachers.table', compact('teachers'))->render(),
                'pagination' => $teachers->links('pagination::bootstrap-4')->toHtml()
            ]);
        }

        return view('admin.teachers.index', compact('teachers'));
    }
    public function create()
    {
        return view('admin.teachers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'birthday' => 'nullable|date',
            'bio' => 'nullable|string',
            'skills' => 'nullable|array',
            'skills.*.name' => 'nullable|string|max:255',
            'skills.*.level' => 'nullable|integer|min:1|max:100',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'google_plus' => 'nullable|url',
            'youtube' => 'nullable|url',
            'github' => 'nullable|url',
            'website' => 'nullable|url',
            'address' => 'nullable|string|max:255',
        ], [
            'name.required' => 'Vui lòng nhập tên.',
            'name.string' => 'Tên phải là một chuỗi ký tự.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại trong hệ thống.',
            'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
            'subject.required' => 'Vui lòng nhập môn học.',
            'birthday.date' => 'Ngày sinh không hợp lệ.',
            'skills.array' => 'Dữ liệu kỹ năng không hợp lệ.',
            'skills.*.name.string' => 'Tên kỹ năng phải là chuỗi ký tự.',
            'skills.*.level.integer' => 'Cấp độ kỹ năng phải là số nguyên.',
            'skills.*.level.min' => 'Cấp độ kỹ năng phải lớn hơn hoặc bằng 1.',
            'skills.*.level.max' => 'Cấp độ kỹ năng không được vượt quá 100.',
            'avatar.image' => 'Ảnh đại diện phải là một hình ảnh.',
            'avatar.mimes' => 'Ảnh đại diện chỉ được phép có định dạng jpg, png, jpeg.',
            'avatar.max' => 'Ảnh đại diện không được vượt quá 2MB.',
            'facebook.url' => 'Facebook phải là một URL hợp lệ.',
            'twitter.url' => 'Twitter phải là một URL hợp lệ.',
            'instagram.url' => 'Instagram phải là một URL hợp lệ.',
            'linkedin.url' => 'LinkedIn phải là một URL hợp lệ.',
            'google_plus.url' => 'Google Plus phải là một URL hợp lệ.',
            'youtube.url' => 'YouTube phải là một URL hợp lệ.',
            'github.url' => 'GitHub phải là một URL hợp lệ.',
            'website.url' => 'Website phải là một URL hợp lệ.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
        ]);
        
    
        $data = $request->except('avatar');
    
        $data['skills'] = json_encode(array_map(function ($skill) {
            return [
                'name' => $skill['name'] ?? '',
                'level' => isset($skill['level']) ? (int) $skill['level'] : 1 // Mặc định level là 1
            ];
        }, $request->skills ?? []));
        
    
        // Xử lý upload ảnh
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); // Lấy phần mở rộng của file (png, jpg, jpeg, ...)
            $fileName = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $extension;
            $file->move(public_path('source/avatars'), $fileName);
            $data['avatar'] = 'source/avatars/' . $fileName;
        }
        
        $data['alias'] = Str::slug($request->name) . '-' . time();
        Teacher::create($data);
    
        return redirect()->route('teacher.admin')->with('success', 'Giáo viên đã được thêm thành công!');
    }
    public function edit($alias)
    {
        $teacher = Teacher::where('alias',  $alias)->firstOrFail();
        return view('admin.teachers.edit', compact('teacher'));
    }
    public function detail($alias)
    {
        $teacher = Teacher::where('alias',  $alias)->firstOrFail();
        return view('admin.teachers.detail', compact('teacher'));
    }
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'birthday' => 'nullable|date',
            'bio' => 'nullable|string',
            'skills' => 'nullable|array',
            'skills.*.name' => 'nullable|string|max:255',
            'skills.*.level' => 'nullable|integer|min:1|max:100',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'google_plus' => 'nullable|url',
            'youtube' => 'nullable|url',
            'github' => 'nullable|url',
            'website' => 'nullable|url',
            'address' => 'nullable|string|max:255',
        ], [
            'name.required' => 'Vui lòng nhập tên giáo viên.',
            'name.max' => 'Tên giáo viên không được vượt quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email này đã tồn tại.',
            'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',
            'subject.required' => 'Vui lòng nhập môn giảng dạy.',
            'birthday.date' => 'Ngày sinh không hợp lệ.',
            'avatar.image' => 'Ảnh đại diện phải là hình ảnh.',
            'avatar.mimes' => 'Ảnh đại diện phải có định dạng JPG, PNG hoặc JPEG.',
            'skills.*.name.string' => 'Tên kỹ năng phải là chuỗi ký tự.',
            'skills.*.name.max' => 'Tên kỹ năng không được quá 255 ký tự.',
            'skills.*.level.integer' => 'Mức độ kỹ năng phải là số nguyên.',
            'skills.*.level.min' => 'Mức độ kỹ năng phải từ 1 đến 100.',
            'skills.*.level.max' => 'Mức độ kỹ năng phải từ 1 đến 100.',
            'facebook.url' => 'Facebook URL không hợp lệ.',
            'twitter.url' => 'Twitter URL không hợp lệ.',
            'instagram.url' => 'Instagram URL không hợp lệ.',
            'linkedin.url' => 'LinkedIn URL không hợp lệ.',
            'google_plus.url' => 'Google Plus URL không hợp lệ.',
            'youtube.url' => 'YouTube URL không hợp lệ.',
            'github.url' => 'GitHub URL không hợp lệ.',
            'website.url' => 'Website URL không hợp lệ.',
            'address.max' => 'Địa chỉ không được quá 255 ký tự.',
        ]);
        

        $data = $request->all();
        if ($request->hasFile('avatar')) {
            $oldAvatarPath = public_path($teacher->avatar);
    
            if (!empty($teacher->avatar) && file_exists($oldAvatarPath)) {
                unlink($oldAvatarPath);
            }
    
            $avatar = $request->file('avatar');
            $avatarName = time() . '_' . $avatar->getClientOriginalName();
            $avatar->move(public_path('source/avatars'), $avatarName);
    
            $data['avatar'] = 'source/avatars/' . $avatarName;
        }

        $data['skills'] = json_encode($request->skills);

        $teacher->update($data);

        return redirect()->route('teacher.admin')->with('success', 'Thông tin giáo viên đã được cập nhật.');
    }
    public function destroy($id)
{
    $teacher = Teacher::findOrFail($id);

    if ($teacher->avatar && file_exists(public_path($teacher->avatar))) {
        unlink(public_path($teacher->avatar));
    }

    $teacher->delete();

    return redirect()->route('teacher.admin')->with('success', 'Giáo viên đã được xóa.');
}
}
