<?php

namespace App\Http\Controllers;

use App\Ms_acara;
use App\Ms_home;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageControllerHome extends Controller
{
    //


    public function index(){
        $data = Ms_home::first();
        $acara = Ms_acara::get();
 
        return view("home/index",compact('data','acara'));
    }

    public function update(Request $request){

        // $this->validate($request,[
        //     'title_browser' => 'required',
        //     'img_title_browser' => "mimes:jpeg,jpg,png,gif|required",
        //     'logo','judul' => "mimes:jpeg,jpg,png,gif|required",
        //     'judul_acara' => 'required',
        //     'deskripsi_judul_acara' => 'required',
        //     'judul_login' => 'required',
        //     'deskripsi_judul_login' => 'required',
        //     'judul_testimoni' => 'required',
        //     'deskripsi_judul_testimoni' => 'required'
        //  ]);
  
        Ms_home::where('id',2)->update([
            'title_browser' => $request->title_browser,
            // 'img_title_browser' => $request->img_title_browser,
            // 'logo' => $request->logo,
            'judul' => $request->judul,
            'judul_acara' => $request->judul_acara,
            'deskripsi_judul_acara' => $request->deskripsi_judul_acara,
            'judul_login' => $request->judul_login,
            'deskripsi_judul_login' => $request->deskripsi_judul_login,
            'judul_testimoni' => $request->judul_testimoni,
            'deskripsi_judul_testimoni' => $request->deskripsi_judul_testimoni
        ]);
        if($request->img_title_browser != null){
            $file_foto = $request->img_title_browser;
            $filename_foto = $file_foto->getClientOriginalName();
            $request->img_title_browser->move('assets/home/img/',$filename_foto);
            Ms_home::where('id',2)->update([
                'img_title_browser' => $filename_foto
            ]);
        }if($request->logo != null){
            $file_foto = $$request->logo;
            $filename_foto = $file_foto->getClientOriginalName();
            $$request->logo->move('assets/home/img/',$filename_foto);
            Ms_home::where('id',2)->update([
                'logo' => $request->logo
            ]);
        }
        Alert::success('Success', 'Edit Data Tampilan Berhasil');
        return redirect("/admin/tampilan");
    }
}
