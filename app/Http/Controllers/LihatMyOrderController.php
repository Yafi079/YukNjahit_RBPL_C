<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\baju;
use App\Models\akunPembeli;
use Auth;


class LihatMyOrderController extends Controller
{

    public function myOrder()
    {
        $user = Auth::user()->id;
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $customerorder = DB::table('customerorder')->join('baju', 'baju.idBaju', '=', 'customerorder.idBaju')
        ->join('orderstatus', 'orderstatus.idStatus', '=', 'customerorder.idStatus')
        ->where('customerorder.idUser',$user)->where('customerorder.idUser',$user)->get();


        // mengirim data pegawai ke view index
    	return view('viewmyorder',['customerorder' => $customerorder]);

    }
}
