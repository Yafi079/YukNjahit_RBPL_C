<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;
use App\Models\Cart;
use Auth;

class DashboardPembeliController extends Controller
{
    public function dashboard(){
        $gambar = DB::table('baju')->join('users', 'baju.idUser', '=', 'users.id')->get();
        $cart = Cart::get();
        $user = Auth::user()->id;
        $pembeli = DB::table('users')->where('id',$user)->get();
		return view('dashboardpembeli',['gambar' => $gambar,'pembeli' => $pembeli]);
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
    		// mengambil data dari table pegawai sesuai pencarian data
        $gambar = DB::table('baju')->join('users', 'baju.idUser', '=', 'users.id')
		->where('deskripsiBaju','like',"%". $cari . "%" )
        ->paginate();
    		// mengirim data pegawai ke view index
            return view('dashboardpembeli',['gambar' => $gambar]);

	}
    public function filter($id)
	{
		// menangkap data pencarian
    		// mengambil data dari table pegawai sesuai pencarian data
        $gambar = Gambar::join('users', 'baju.idUser', '=', 'users.id')->Where('idGender',$id)->get();
    		// mengirim data pegawai ke view index
            return view('dashboardpembeli',['gambar' => $gambar]);

	}
    public function view($id)
    {
        //$gambar = Gambar::join('users', 'gambar.idUser', '=', 'users.id')->Where('gambar.idBaju',$id)->get();
        // mengambil data pegawai berdasarkan id yang dipilih
        $gambar = DB::table('baju')->join('users', 'baju.idUser', '=', 'users.id')->where('baju.idBaju',$id)->get();
        $cart = DB::table('ukuranbaju')->where('ukuranbaju.idBaju',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewbaju',['gambar' => $gambar,'cart' => $cart]);

    }

    public function ukuran($id){
        $gambar = DB::table('baju')->where('idBaju',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('ukuranbaju',['gambar' => $gambar]);
	}
}

