<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBetsController extends Controller
{
    public function homeBets()
    {
        return view('web.homebets.home-bets');
    }
    public function pointBets()
    {
        return view('web.homebets.point-bets');
    }
    public function storeBets()
    {
        return view('web.homebets.store-bets');
    }
}
