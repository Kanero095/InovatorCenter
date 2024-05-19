<?php

namespace App\Http\Controllers;

use App\Models\innovation_list;
use App\Models\inovasi;
use Illuminate\Http\Request;

class InovasiController extends Controller
{
    // ------------------ Innovation Teams ------------------------//
    // Show Innovation Teams Data
    public function index()
    {
        $teams = inovasi::all();
        return view('DaftarTim', compact(['teams']));
    }

    // Show Innovation Teams Data di Home
    public function smallIndex()
    {
        $teams = inovasi::paginate(4);
        return view('home', compact(['teams']));
    }

    // Create Innovation Teams
    public function create()
    {
        return view('admin.create');
    }

    // read data Innovation Teams
    public function read(string $id, Request $request)
    {
        $teams = inovasi::find($id);
        return view('ReadTim', compact('teams'));
    }

    // ------------------ Innovations ------------------------//
    // show Innovations Data
    public function index_inno()
    {
        $innovations = innovation_list::all();
        return view('inovasi',compact('innovations'));
    }

    // Create Innovations
    public function create_innovation()
    {
        return view('admin.create_innovations');
    }

    // show innovation list in Home
    public function smallIndex_inno()
    {
        $innovations = innovation_list::paginate(8);
        return view('home', compact(['innovations']));
    }
}
