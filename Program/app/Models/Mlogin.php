<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mlogin extends Model
{
    // use HasFactory;
    // buat fungsi untuk ambil ambil data login
    function getdata($username, $password)
    {
        // cek data username dan password
        $query = DB::table('tb_user')
        ->select("username","password","nama")
        ->where("username",$username)
        // -> orWhere("1=1")
        // ->where("password",$password)
        // ->WhereRaw("username = '$username' OR 1=1")
        ->get();
        return $query;
    }
}
