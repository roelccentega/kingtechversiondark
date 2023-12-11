<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('web.articles.index');
    }
    public function franquicias()
    {
        return view('web.articles.franquicias-de-casa-de-apuestas-deportivas-y-casino-online');
    }
    // Franquicias de Casa de Apuestas Deportivas y Casino Online
}
