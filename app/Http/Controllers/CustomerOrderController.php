<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\baju;
use App\Models\akunPembeli;
use Auth;


class CustomerOrderController extends Controller
{

    public function viewCustomerOrder()
    {
        $user = Auth::user()->id;
        $customerorder = DB::table('customerorder')->join('baju', 'baju.idBaju', '=', 'customerorder.idBaju')
        ->join('orderstatus', 'orderstatus.idStatus', '=', 'customerorder.idStatus')
        ->where('customerorder.idPenjahit',$user)->get();

    	return view('customerorder',['customerorder' => $customerorder]);

    }
    public function customer($id)
    {
        $user = Auth::user()->id;
        $customerorder = DB::table('customerorder')->join('baju', 'baju.idBaju', '=', 'customerorder.idBaju')
        ->join('users', 'users.id', '=', 'customerorder.idUser')
        ->join('metodepembayaran','metodepembayaran.idPayment','=','customerorder.idPayment')
        ->where('customerorder.idPenjahit',$user)->where('customerorder.idCustomerOrder',$id)->get();
        $reference = DB::table('customerorder')->where('customerorder.idPenjahit',$user)->where('customerorder.idCustomerOrder',$id)->get();
    	return view('viewcustomerorder',['customerorder' => $customerorder,'reference' => $reference]);

    }
}
