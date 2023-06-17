<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;
use App\Models\Cart;
use Auth;


class UkuranBajuController extends Controller
{
    public function ukuranBaju(){
        $gambar = Gambar::get();
        $cart = Cart::get();
        $user = Auth::user()->id;
        $pembeli = DB::table('users')->where('id',$user)->get();
		return view('ukuranbaju',['gambar' => $gambar,'pembeli' => $pembeli]);
	}
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $gambar = DB::table('baju')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewbaju',['gambar' => $gambar]);

    }
    public function ukuran(Request $request){
        $user = Auth::user()->id;
        $pembeli = DB::table('users')->where('id',$user)->get();
		DB::table('ukuranbaju')->insert([
            'A' => $request->A,
            'B' => $request->B,
            'C' => $request->C,
            'D' => $request->D,
            'idUser' => $user,
            'idBaju' => $request->idBaju,
        ]);
		return redirect()->route("viewbaju",['id' => $request->idBaju]);
	}
}
