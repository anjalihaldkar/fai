<?php

namespace App\Http\Controllers;

class ResourceController extends Controller
{
    public function resources()
    {
        return view('pages.resources.resources');
    }

    public function tool()
    {
        return view('pages.resources.tool');
    }
}
