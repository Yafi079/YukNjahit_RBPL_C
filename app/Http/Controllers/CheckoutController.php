<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\baju;
use App\Models\Order;
use Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $user = Auth::user()->id;
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();

        $cart = DB::table('cart')->join('baju', 'baju.idBaju', '=', 'cart.idBaju')->where('cart.idUser',$user)->get();
        //$ukuran= DB::table('cart')->where('cart.idUser',$user)->get();
    	return view('checkout',['cart' => $cart]);

    }
    public function payment(Request $request){
        $user = Auth::user()->id;

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

		Order::create([
			'file' => $nama_file,
			'message' => $request->message,
            'idUser' => $user,
            'idBaju' => $request->idBaju,
            'alamatPengiriman' => $request->alamatPengiriman,
            'ukuran' => $request->idUkuran,
            'totalHarga' => $request->totalHarga,
            'idPayment' => $request->idPayment,
            'idPenjahit' => $request->idPenjahit,

		]);
        return redirect('/myorder');


    }
}
/*$cart = DB::table('cart')->join('gambar', 'gambar.idBaju', '=', 'cart.idBaju')->
        join('customerorder', 'cart.idBaju', '=', 'customerorder.idBaju')->where('cart.idUser',$user)
        ->each(function($oldRecord){
            $newPost = $oldRecord->replicate();
            $newPost -> setTable('customerorder');
            $newPost -> save();

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
		Order::create([
			'file' => $nama_file,
			'message' => $request->message,
            'idUser' => $user,
            'idBaju' => $request->idBaju,
            'alamatPengiriman' => $request->alamatPengiriman,
            'ukuran' => $request->idUkuran,
            'totalHarga' => $request->totalHarga,
            'idPayment' => $request->idPayment,
		]);
        return redirect()->back();

        	DB::table('customerorder')->insert([
			'message' => $request->message,
            'idUser' => $user,
            'idBaju' => $request->idBaju,
            'alamatPengiriman' => $request->alamatPengiriman,
            'ukuran' => $request->idUkuran,
            'totalHarga' => $request->totalHarga,
            'idPayment' => $request->idPayment,
        ]);
        */
