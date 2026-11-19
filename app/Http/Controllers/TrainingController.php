<?php

namespace App\Http\Controllers;

class TrainingController extends Controller
{
    public function online()
    {
        return view('pages.training.online-training');
    }

    public function offline()
    {
        return view('pages.training.offline-training');
    }

    public function detail()
    {
        return view('pages.training.training-detail');
    }

    public function liveWebinar()
    {
        return view('pages.training.live-webiner');
    }
}
