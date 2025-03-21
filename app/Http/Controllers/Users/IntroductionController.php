<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Infomations;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index(Request $request)
    {
        $introduction = Infomations::find(1);
        return view('users.introduction.index', compact('introduction'));
    }
}
