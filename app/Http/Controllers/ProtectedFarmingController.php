<?php

namespace App\Http\Controllers;

class ProtectedFarmingController extends Controller
{
    public function protectedFarming()
    {
        return view('pages.protected-farming.protected-farming');
    }

    public function protectedFarmingStructure()
    {
        return view('pages.protected-farming.protected-farming-structure');
    }

    public function protectedStructure()
    {
        return view('pages.protected-farming.protected-structure');
    }

    public function polyhouseFanpad()
    {
        return view('pages.protected-farming.polyhouse-fanpad');
    }
}
