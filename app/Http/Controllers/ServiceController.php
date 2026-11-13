<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function planFarm()
    {
        return view('pages.services.plan-farm');
    }

    public function turnkey()
    {
        return view('pages.services.turnkey');
    }

    public function consultation()
    {
        return view('pages.services.consultation');
    }

    public function agronomySupport()
    {
        return view('pages.services.agronomy-support');
    }

    public function agrotourism()
    {
        return view('pages.services.agrotourism');
    }

    public function salesMarketLinkage()
    {
        return view('pages.services.sales-market-linkage');
    }

    public function farmingModel()
    {
        return view('pages.services.farming-model');
    }
}
