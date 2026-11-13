<?php

namespace App\Http\Controllers;

class CropController extends Controller
{
    public function cropSolution()
    {
        return view('pages.crops.crop-solution');
    }

    public function exoticLeafy()
    {
        return view('pages.crops.exotic-leafy');
    }

    public function fruitsVegi()
    {
        return view('pages.crops.fruits-vegi');
    }
}
