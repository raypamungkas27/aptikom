<?php

namespace App\Http\Controllers;

use App\Ms_acara;
use Illuminate\Http\Request;
use App\Ms_home;
use App\Ms_pendaftaran_acara_youtube;
use App\Ms_pendaftaran_acara_zoom;
use App\Ms_status_acara;
use RealRashid\SweetAlert\Facades\Alert;


class PageControllerGuest extends Controller
{
    //
    public function daftarAcara(){
        $data_tampilan = Ms_home::first();
        $data_acara = Ms_acara::all();

        return view("user/acara/daftarAcara",compact('data_tampilan','data_acara'));
    }

    public function pendaftaranAcara($id){
        $status_daftar_youtube = Ms_pendaftaran_acara_youtube::where('id_user',auth()->user()->id)->where('id_acara',$id)->count();
        $status_daftar_zoom = Ms_pendaftaran_acara_zoom::where('id_user',auth()->user()->id)->where('id_acara',$id)->count();
        // dd($status_daftar);
        $data_acara = Ms_acara::where('id',$id)->first();
        $data_tampilan = Ms_home::first();
        return view("user/acara/pendaftaranAcara",compact('data_tampilan','data_acara','status_daftar_zoom','status_daftar_youtube'));
    }
}
