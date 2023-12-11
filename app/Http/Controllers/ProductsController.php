<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function tinbet()
    {
        return view('web.products.tinbet');          
    }
    public function betgana()
    {
        return view('web.products.betgana');          
    }
    public function videoLoteria()
    {
        return view('web.products.video-loteria');          
    }
     public function bingoXd()
    {
        return view('web.products.bingoxd');          
    }
     public function betganaRace()
    {
        return view('web.products.betganarace');          
    }
}
