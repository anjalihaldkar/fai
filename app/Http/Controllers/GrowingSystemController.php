<?php

namespace App\Http\Controllers;

class GrowingSystemController extends Controller
{
    public function growing()
    {
        return view('pages.growing.growing');
    }

    public function indoorVerticalFarming()
    {
        return view('pages.growing.indoor-vertical');
    }

    public function outdoorHydroponics()
    {
        return view('pages.growing.outdoor-hydroponics');
    }

    public function cocopeat()
    {
        return view('pages.growing.cocopeat');
    }

    public function soilBased()
    {
        return view('pages.growing.soil-based');
    }
}
