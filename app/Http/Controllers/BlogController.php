<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.blog');
    }

    public function detail()
    {
        return view('pages.blog.blog-detail');
    }

    public function details()
    {
        return view('pages.blog.blog-details');
    }
}
