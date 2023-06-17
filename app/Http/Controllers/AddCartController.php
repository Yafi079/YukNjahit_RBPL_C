<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Cart;
use App\Models\Gambar;
class AddCartController extends Controller
{
    public function cart(Request $request){
		$this->validate($request, [

			'message' => 'required',
		]);


        $user = Auth::user()->id;
		Cart::create([

			'message' => $request->message,
            'idUser' => $user,
            'idBaju' => $request->idBaju,
            'idPenjahit' => $request->idUser,
            'ukuran' => $request->ukuran,
		]);

        //return redirect()->route("ukuranbaju",['id' => $request->idBaju]);
		return redirect('/cart');
	}
}

/*jika mau pakai gambar di view baju pakai fungsi ini terus ubah di mysql untuk file tidak boleh null.
public function cart(Request $request){
    $this->validate($request, [
        'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'message' => 'required',
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');

    $nama_file = time()."_".$file->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'data_file';
    $file->move($tujuan_upload,$nama_file);
    $user = Auth::user()->id;
    Cart::create([

        'message' => $request->message,
        'idUser' => $user,
        'idBaju' => $request->idBaju,
        'idPenjahit' => $request->idUser,
    ]);


    return redirect()->back();
}
