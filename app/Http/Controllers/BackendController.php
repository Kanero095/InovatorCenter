<?php

namespace App\Http\Controllers;

use App\Models\innovation_list;
use App\Models\inovasi;
use Illuminate\Http\Request;

class BackendController extends Controller
{

    //  --------- configure form input Innovation Teams --------- //
    public function insert(Request $request)
    {
        $tim = new inovasi();
        $tim->nameTeam = $request->nameTeam;
        $tim->deskripsi = $request->deskripsi;
        $tim->web = $request->web;
        $tim->instagram = $request->instagram;
        $tim->facebook = $request->facebook;
        $tim->other = $request->other;

        $tgl = date('d-m-Y');

        // image logo
        $image1 = $request->file('imgLogo');
        $imagename = $tgl .'_logo_tim_' . $request->nameTeam . '.' . $image1->getClientOriginalExtension();
        $request->imgLogo->move('img/LogoTim', $imagename);
        $tim->imgLogo = $imagename;


        // image tim
        $image2 = $request->file('imgTim');
        $imagename2 = $tgl .'_foto_tim_' . $request->nameTeam . '.' . $image2->getClientOriginalExtension();
        $request->imgTim->move('img/ImageTim', $imagename2);
        $tim->imgTim = $imagename2;

        $tim->save();
        return redirect('/admin/create/inovasi_team/zero_inovator');
    }

    // ----------- Configuration form input Innovations ----------- //
    public function insert2(Request $request)
    {
        $time = date('H:i:s d-m-Y');

        $innovations = new innovation_list();
        $innovations->nameInnovation=$request->nameInnovation;
        $innovations->descriptionInnovation=$request->descriptionInnovation;
        $innovations->nameTeamInnovation=$request->nameTeamInnovation;
        $innovations->DateCreated=$time;

        $tgl = date('d-m-Y');

        // image Innovations
        $image = $request->file('imgInnovation');
        $imagename = $tgl .'_image_Innovation_' . $request->nameInnovasi . '.' . $image->getClientOriginalExtension();
        $request->imgInnovation->move('img/Innovations', $imagename);
        $innovations->imgInnovation = $imagename;

        $innovations->save();
        return redirect('/admin/create/inovasi_list/zero_inovator');
    }
}
