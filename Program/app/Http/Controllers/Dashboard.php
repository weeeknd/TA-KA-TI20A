<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Dashboard extends Controller
{
    function __construct()
    {
        // baca session cookie secara global
        $this->middleware(function($req,$next){
            if($req->session()->has('username_Program') || Cookie::has("Cookie_Program")){
                return $next($req);
            }
            else
            {
                return redirect("/login");    
            }
        });
    }

    function index(Request $req)
    {
        // buat session
        // jika session ada dan berhasil
        // jika cookie ada
        // if($req->session()->has('username_loginapp') || Cookie::has("Cookie_loginapp")){
            // ambil nilai session "username_loginapp"
            $data = [
                "isi_session" => $req->session()->get('username_Program')
            ];
            return view("dashboard",$data);
        // }
        // jika session tidak ada / tidak login
        // else
        // {
        //     return redirect("/login");
        // }
        
    }

    function getView(Request $req )
    {
        echo " Ini Halaman Dashboard (view)";
    }
}
