<?php

namespace App\Http\Controllers;

class AutomationController extends Controller
{
    public function automation()
    {
        return view('pages.automation.automation');
    }

    public function iot()
    {
        return view('pages.automation.iot');
    }

    public function sensor()
    {
        return view('pages.automation.sensor');
    }
}
