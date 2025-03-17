
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Webconfigs;

function get_config()
{
    return Webconfigs::find(1);
}
