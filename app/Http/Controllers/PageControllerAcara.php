<?php

namespace App\Http\Controllers;

use App\Ms_acara;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageControllerAcara extends Controller
{
    //
    public function tambah(Request $request){

        // $this->validate($request,[
        //     'img' => 'mimes:jpeg,jpg,png,gif|required' ,
        //     'harga' => 'required' ,
        //     'judul_acara' => 'required' ,
        //     'deskripsi_acara' => 'required'  ,
        //     'tanggal' => 'required' ,
        //     'kuota' => 'required' ,
        //     'jumlah_daftar' => 'required' ,
        //     'id_status' => 'required' 
        //  ]);

        $file_foto = $request->img;
            $filename_foto = $file_foto->getClientOriginalName();
            $request->img->move('assets/home/img/courses/',$filename_foto);

        Ms_acara::create([
            'img' => $filename_foto,
            'harga' => $request->harga."K",
            'judul_acara' => $request->judul_acara,
            'deskripsi_acara' =>  $request->deskripsi_acara,
            'tanggal' => $request->tanggal,
            'kuota' => $request->kuota,
            'jumlah_daftar' => 0,
            'id_status' => $request->id_status
        ]);
        Alert::success('Success', 'Data Acara Sudah Berhasil Di Inputkan');
        return redirect("/admin/acara");
    }

    public function saveUpdate(Request $request,$id){


        // $this->validate($request,[
        //     // 'img' => 'mimes:jpeg,jpg,png,gif' ,
        //     'harga' => 'required' ,
        //     'judul_acara' => 'required' ,
        //     'deskripsi_acara' => 'required'  ,
        //     'tanggal' => 'required' ,
        //     'kuota' => 'required' ,
        //     'jumlah_daftar' => 'required' ,
        //     'id_status' => 'required' 
        //  ]);

         Ms_acara::where('id',$id)->update([
            'harga' => $request->harga,
            'judul_acara' => $request->judul_acara,
            'deskripsi_acara' =>  $request->deskripsi_acara,
            'tanggal' => $request->tanggal,
            'kuota' => $request->kuota,
            'jumlah_daftar' => 0,
            'id_status' => $request->id_status
        ]);

        if($request->img != null){
            $file_foto = $request->img;
            $filename_foto = $file_foto->getClientOriginalName();
            $request->img->move('assets/home/img/courses/',$filename_foto);
            Ms_acara::where('id',$id)->update([
                'img' => $filename_foto
            ]);
        }

        Alert::success('Success', 'Edit Data Acara Berhasil');
        return redirect("/admin/acara");
    }

    public function hapus($id){
 
        Ms_acara::where('id',$id)->delete();
        Alert::success('Success', 'Hapus Data Acara Berhasil');
        return redirect("/admin/acara");
    }

    

}

