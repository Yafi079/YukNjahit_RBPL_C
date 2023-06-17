<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;
use App\Models\Cart;
use Auth;


class ViewUkuranBajuController extends Controller
{
    public function ukuranBaju($idCustomer){
        $user = Auth::user()->id;
        $baju = DB::table('customerorder')->join('ukuranbaju', 'ukuranbaju.idUkuran', '=', 'customerorder.ukuran')
        ->where('customerorder.idPenjahit',$user)->where('customerorder.idCustomerOrder',$idCustomer)->get();

		return view('viewukuranbaju',['baju' => $baju]);

	}
    public function status(Request $request){
        $user = Auth::user()->id;
        $baju = DB::table('customerorder')->join('ukuranbaju', 'ukuranbaju.idUkuran', '=', 'customerorder.ukuran')
        ->where('customerorder.idPenjahit',$user)->get();

        DB::table('customerorder')->where('idCustomerOrder',$request->idCustomer)->update([
            'idStatus' => $request->idStatus,
        ]);
        return redirect('/customerorder');

	}
}
