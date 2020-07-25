<?php

namespace App\Http\Controllers;

use App\Ms_acara;
use Illuminate\Http\Request;
use App\Ms_home;
use App\Ms_status_acara;
use RealRashid\SweetAlert\Facades\Alert;

class PageControllerAdmin extends Controller
{
    public function index(){
        $data_tampilan = Ms_home::first();
        return view('admin/dashboard',compact('data_tampilan'));
    }

    public function tampilan(){
       
        $data_tampilan = Ms_home::first();
        return view('admin/tampilan',compact('data_tampilan'));
    }

    public function acara(){
        $data_tampilan = Ms_home::first();
        $data_acara = Ms_acara::all();
        $data_status = Ms_status_acara::all();
        return view('admin/acara/acara',compact('data_tampilan','data_acara','data_status'));
    }

    public function updateAcara($id){
        $data_tampilan = Ms_home::first();
        $data_status = Ms_status_acara::all();
        $data_acara =Ms_acara::where('id',$id)->first();
        return view("admin/acara/updateAcara",compact('data_tampilan','data_acara','data_status'));
    }



  
}
