<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //
    public function index(){
        return view('page.manage_money01');
    }
}
