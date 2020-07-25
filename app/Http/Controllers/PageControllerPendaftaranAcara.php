<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Ms_pendaftaran_acara_youtube;
use App\Ms_pendaftaran_acara_zoom;

class PageControllerPendaftaranAcara extends Controller
{
    public function saveDaftarAcaraYoutube(Request $request,$id){
        $last_id = Ms_pendaftaran_acara_youtube::create([
            'id_user' => auth()->user()->id,
            'id_acara' => $id,
        ])->id;
        if ($request->sertifikat == 'on') {
            Ms_pendaftaran_acara_youtube::where('id',$last_id)->update([
                'sertifikat' => 1,
            ]);
        } else {
            Ms_pendaftaran_acara_youtube::where('id',$last_id)->update([
                'sertifikat' => 0,
            ]);
        }

        Alert::success('Success', 'Anda Berhasil Mendaftar');
        return redirect()->back();
        
    }

    public function saveDaftarAcaraZoom($id){
        Ms_pendaftaran_acara_zoom::create([
            'id_user' => auth()->user()->id,
            'id_acara' => $id,
        ]);
        Alert::success('Success', 'Anda Berhasil Mendaftar');
        return redirect()->back();
    }

}
