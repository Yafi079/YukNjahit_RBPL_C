<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class EditProfilePembeliController extends Controller
{
    public function profile()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $user = Auth::user()->id;
        $pembeli = DB::table('users')->where('id',$user)->get();

    	// mengirim data pegawai ke view index
    	return view('profilepembeli',['pembeli' => $pembeli]);

    }
    public function view($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $pembeli = DB::table('users')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('profilepembeli',['pembeli' => $pembeli]);

}
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
    $pembeli = DB::table('users')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editprofilepembeli',['pembeli' => $pembeli]);
}
public function update(Request $request)
{
	// update data pegawai
	DB::table('users')->where('id',$request->id)->update([
		'name' => $request->nama,
		'email' => $request->jabatan,
		'notelp' => $request->umur,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('profilepembeli');
}
}


