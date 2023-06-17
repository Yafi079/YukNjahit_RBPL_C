<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;
use Auth;


class DashboardPenjahitController extends Controller
{
    public function dashboard(){
        $user = Auth::user()->id;
        $gambar = DB::table('baju')->join('users', 'baju.idUser', '=', 'users.id')->where("idUser",$user)->get();
		return view('dashboardpenjahit',['gambar' => $gambar]);
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
    		// mengambil data dari table pegawai sesuai pencarian data
        $user = Auth::user()->id;
        $gambar = DB::table('baju')->join('users', 'baju.idUser', '=', 'users.id')
		->where('deskripsiBaju','like',"%". $cari . "%" )->where("idUser",$user)
        ->paginate();
    		// mengirim data pegawai ke view index
            return view('dashboardpenjahit',['gambar' => $gambar]);

	}
    public function filter($id)
	{
		// menangkap data pencarian
    		// mengambil data dari table pegawai sesuai pencarian data
        $user = Auth::user()->id;
        $gambar = Gambar::join('users', 'baju.idUser', '=', 'users.id')->Where('idGender',$id)->where("idUser",$user)->get();
    		// mengirim data pegawai ke view index
            return view('dashboardpenjahit',['gambar' => $gambar]);

	}
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $gambar = DB::table('baju')->join('users', 'baju.idUser', '=', 'users.id')->where('baju.idBaju',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewbajupenjahit',['gambar' => $gambar]);

    }
    public function ukuran($id){
        $gambar = DB::table('baju')->where('idBaju',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('ukuranbaju',['gambar' => $gambar]);
	}
}

