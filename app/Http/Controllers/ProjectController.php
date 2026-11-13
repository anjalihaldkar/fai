<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects.our-project');
    }

    public function details()
    {
        return view('pages.projects.project-details');
    }
}
