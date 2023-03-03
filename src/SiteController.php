<?php

namespace Mfay\AlumniTest;

use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    public function help()
    {
        return view('alumni::site.help');
    }
}
