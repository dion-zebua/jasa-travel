<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function beranda()
    {
        return view('pages.home', [
            'title' => 'Beranda',
            'desc' => 'Beranda',
        ]);
    }
    public function cariRute()
    {
        return 'asa';
    }
}
