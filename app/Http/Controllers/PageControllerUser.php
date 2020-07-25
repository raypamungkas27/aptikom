<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use RealRashid\SweetAlert\Facades\Alert;

class PageControllerUser extends Controller
{

    use AuthenticatesUsers;


    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
       

        if(auth()->attempt(array('email' => $request['email'], 'password' => $request['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                Alert::success('Success', 'Login Berhasil');
                return redirect("/admin/dashboard");
            }else{
                Alert::success('Success', 'Login Berhasil');
                return redirect("/admin/dashboard");
            }
        }else{
            Alert::warning('Login Gagal', 'Login tidak berhasil, harap periksa email dan password anda');
            return redirect("/")
                ->with('error','Email-Address And Password Are Wrong.');
            
        }
    }

    public function postlogin(){
        
    }

    public function register_umum(Request $request){
        dd($request->all());
    }

    public function register_aptikom(Request $request){
        dd($request->all());
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
