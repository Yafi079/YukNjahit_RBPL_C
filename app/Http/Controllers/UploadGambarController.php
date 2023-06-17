<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Gambar;
use File;

class UploadGambarController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
        $user = Auth::user()->id;
        $pembeli = DB::table('users')->where('id',$user)->get();
		return view('uploadproduct',['gambar' => $gambar,'pembeli' => $pembeli]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'deskripsiBaju' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Gambar::create([
			'file' => $nama_file,
			'deskripsiBaju' => $request->deskripsiBaju,
            'hargaBaju'=> $request->hargaBaju,
            'kainBaju'=> $request->kainBaju,
            'warnaBaju'=> $request->warnaBaju,
            'namaBaju'=> $request->namaBaju,
            'idGender'=> $request->idGender,
            'idUser'=> $request->idUser,

		]);

		return redirect()->back();
	}

    public function hapus($id){
        // hapus file
        $gambar = Gambar::where('idBaju',$id)->first();
        File::delete('data_file/'.$gambar->file);

        // hapus data
        Gambar::where('idBaju',$id)->delete();

        return redirect('/dashboardpenjahit');
    }
}
