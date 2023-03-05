<?php

namespace Mfay\AlumniTest\Admin;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('alumni::admin.site.index');
    }
}

