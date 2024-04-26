<?php

namespace App\Http\Controllers;

use App\Models\inovasi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function inovasi()
    {
        $teams = inovasi::all();

        return view('DaftarTim', compact([
            'teams'
        ]));
    }


}
