<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
      public function peruGaming()
    {
        return view('web.events.peru-gaming');
    }

    public function exporFeria()
    {
        return view('web.events.expo-feria');
    }
}
