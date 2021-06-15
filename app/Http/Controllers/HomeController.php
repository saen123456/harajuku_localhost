<?php

namespace App\Http\Controllers;

use App\Models\BannerPic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home_view(){
        //$data = BannerPic::order_by('created_at', 'desc')->first();
        //$data = DB::table('bannerpic')->order_by('created_at', 'desc')->first();
        $data = DB::table('bannerpic')->orderBy('created_at', 'desc')->first();
        $menu = DB::table('menu_tab')->orderBy('id', 'asc')->get();

        return view('front.index', compact('data','menu'));
    }
}
