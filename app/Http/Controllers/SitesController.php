<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
public function  oferta()
{

    return view('sites.oferta');
}

public function  formularz()
{
    return view('sites.formularz');
}

public function  kontakt()
{
    return view('sites.kontakt');
}
public function panel()
{
    return view('sites.panel');
}
}
