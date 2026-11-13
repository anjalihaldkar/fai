<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function about()
    {
        return view('pages.company.about');
    }

    public function global()
    {
        return view('pages.company.global');
    }

    public function contact()
    {
        return view('pages.company.contact');
    }

    public function consultationSeo()
    {
        return view('pages.company.consultation-seo');
    }
}
