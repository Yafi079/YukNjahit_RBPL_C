<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\baju;
use App\Models\akunPembeli;
use Auth;

class CartController extends Controller
{

    public function showCart()
    {
        $user = Auth::user()->id;
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $cart = DB::table('cart')->join('baju', 'baju.idBaju', '=', 'cart.idBaju')->where('cart.idUser',$user)->get();
    	// mengirim data pegawai ke view index
    	return view('viewcart',['cart' => $cart]);

    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('cart')->where('idCart',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/cart');
    }
}
