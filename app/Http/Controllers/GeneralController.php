<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use app\Providers\RouteServiceProvider;


class GeneralController extends Controller
{
public function redirectAfterLogin(Request $request){
    $role = $request->user()->role;
    switch ($role) {
        case 'pembeli':
            return redirect("/dashboardpembeli");
            break;
        case 'penjahit':
            return redirect("/dashboardpenjahit");
            break;
    }
}
}
