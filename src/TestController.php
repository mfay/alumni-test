<?php


use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('alumni.test.index');
    }
}
