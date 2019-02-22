<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
public function  menu1()
{

    return view('sites.menu1');
}

public function  menu2()
{
    return view('sites.menu2');
}

public function  menu3()
{
    return view('sites.menu3');
}
}
