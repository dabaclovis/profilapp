<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('dashboards.pages.index');
    }

    public function about()
    {
        return view('dashboards.pages.about');
    }

    public function contact()
    {
        return view('dashboards.pages.contact');
    }

    public function resume()
    {
        return view('dashboards.pages.resume');
    }
}
