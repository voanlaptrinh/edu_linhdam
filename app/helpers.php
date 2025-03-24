
<?php

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Webconfigs;

function get_config()
{
    return Webconfigs::find(1);
}
function get_course()
{
    $courses = Course::orderBy('created_at', 'desc')->get();
    return $courses;
}
