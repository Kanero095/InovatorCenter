<?php

namespace App\Http\Controllers;

use App\Models\inovasi;
use Illuminate\Http\Request;

class InovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tims = inovasi::all();
        return view('DaftarTim', compact('tims'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $tim = new inovasi();
        $tim->nameInovasi = $request->nameInovasi;
        $tim->deskripsi = $request->deskripsi;
        $tim->web = $request->web;
        $tim->instagram = $request->instagram;
        $tim->facebook = $request->facebook;
        $tim->other = $request->other;

        $tgl = date('d-m-Y');

        // image logo
        $image1 = $request->file('imgLogo');
        $imagename = $tgl .'_logo_tim_' . $request->nameInovasi . '.' . $image1->getClientOriginalExtension();
        $request->imgLogo->move('img/LogoTim', $imagename);
        $tim->imgLogo = $imagename;


        // image tim
        $image2 = $request->file('imgTim');
        $imagename2 = $tgl .'_foto_tim_' . $request->nameInovasi . '.' . $image2->getClientOriginalExtension();
        $request->imgTim->move('img/ImageTim', $imagename2);
        $tim->imgTim = $imagename2;

        $tim->save();
        return redirect('/admin/create/inovasi/zero_$95');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
