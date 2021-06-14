<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLeaderController extends Controller
{
    //
    public function manage_banner_view(){
        return view('admin_leader.manage_banner');
    }
}
