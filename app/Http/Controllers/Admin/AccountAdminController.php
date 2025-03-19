<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountAdminController extends Controller
{
    public function index(Request $request)
    {  
        $admin = Auth::user();
        return view('admin.account.index', compact('admin'));
    }
}
