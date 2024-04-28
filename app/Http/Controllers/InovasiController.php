<?php

namespace App\Http\Controllers;

use App\Models\inovasi;
use Illuminate\Http\Request;

class InovasiController extends Controller
{
    // Show Innovation Data
    public function index()
    {
        $teams = inovasi::all();
        return view('DaftarTim', compact(['teams']));
    }

    // Create Innovation
    public function create()
    {
        return view('admin.create');
    }

    // read data
    public function read(string $id, Request $request)
    {
        $teams = inovasi::find($id);
        return view('ReadTim', compact('teams'));
    }
}
