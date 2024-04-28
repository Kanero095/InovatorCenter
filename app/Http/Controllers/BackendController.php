<?php

namespace App\Http\Controllers;

use App\Models\inovasi;
use Illuminate\Http\Request;

class BackendController extends Controller
{

    // configure form input
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
}
