<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webconfigs;
use Illuminate\Http\Request;

class WebConfigController extends Controller
{
    public function index(Request $request)
    {
        $webConfig = Webconfigs::find(1);
        return view('admin.webconfig.index', compact('webConfig'));
    }
    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'code' => 'nullable|string',
            'address' => 'nullable|string',
            'website' => 'nullable|string',
            'gg_map' => 'nullable|string',
            'gg_analytic' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'facebook' => 'nullable',
            'zalo' => 'nullable',
            'pinterest' => 'nullable',
            'description' => 'nullable',
            'youtube' => 'nullable',
            'whats_app' => 'nullable',
            'dribbble' => 'nullable',
            'tiktok' => 'nullable',
            'telegram' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'reddit' => 'nullable',
            'linkedin' => 'nullable',
            'google' => 'nullable',
            // Add validation for other fields
        ], [
            'title.required' => 'Vui lòng nhập tên.',
            'title.string' => 'Tên phải là một chuỗi.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.string' => 'Số điện thoại phải là một chuỗi.',
            'phone.regex' => 'Số điện thoại phải có đúng 10 chữ số.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'code.string' => 'Mã phải là một chuỗi.',
            'gg_map.string' => 'Google Map URL phải là một chuỗi.',
            'logo.required' => 'Vui lòng tải lên logo.',
            'logo.image' => 'Logo phải là một hình ảnh.',
            'logo.mimes' => 'Logo chỉ được chấp nhận với các định dạng: jpeg, png, jpg, gif, svg.',

        ]);

        // Find the existing WebConfig model based on some criteria (you might use ID or some unique identifier)
        $webConfig = Webconfigs::find(1); // Replace 1 with the appropriate identifier

        // Update other fields
        $webConfig->update([
            'title' => $request->input('title'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'code' => $request->input('code'),
            'gg_map' => $request->input('gg_map'),
            'website' => $request->input('website'),
            'gg_analytic' => $request->input('gg_analytic'),
            'facebook' => $request->input('facebook'),
            'zalo' => $request->input('zalo'),
            'pinterest' => $request->input('pinterest'),
            'youtube' => $request->input('youtube'),
            'dribbble' => $request->input('dribbble'),
            'description' => $request->input('description'),
            'tiktok' => $request->input('tiktok'),
            'telegram' => $request->input('telegram'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'reddit' => $request->input('reddit'),
            'whats_app' => $request->input('whats_app'),
            'linkedin' => $request->input('linkedin'),
            'google' => $request->input('google'),
            // Add update for other fields
        ]);


        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists
            if ($webConfig->logo && file_exists(public_path($webConfig->logo))) {
                unlink(public_path($webConfig->logo));
            }

            // Store the new logo in the 'public/logos' directory
            $logoPath = $request->file('logo')->move(public_path('logos'), time() . '_' . $request->file('logo')->getClientOriginalName());

            // Save the path relative to the public directory
            $webConfig->logo = 'logos/' . basename($logoPath);
        }


        // Save the changes
        $webConfig->save();
        // Redirect back or to a specific route after the update
        return redirect()->back()->with('success', 'Đã update thành công!');
    }
}
