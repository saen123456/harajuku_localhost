<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ManageController extends Controller
{
    //
    public function index_lv_1(){
        $data = DB::table('tbl_Order')->join('tbl_User','tbl_Order.Or_UserID','=','tbl_User.Us_ID')->leftjoin('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->where('tbl_Order.Or_Status', '1')->get();
        $level1 = DB::table('tbl_Order')->where('Or_Status', '1')->count();
        $level2 = DB::table('tbl_Order')->where('Or_Status', '2')->count();
        $level3 = DB::table('tbl_Order')->where('Or_Status', '3')->count();
        $level4 = DB::table('tbl_Order')->where('Or_Status', '4')->count();
        //echo $data;
        return view('admin.manage_order01',compact('data','level1','level2','level3','level4'));
    }
    public function update_lv_1($id){
        //echo $id;
        DB::table('tbl_Order')->where('Or_ID', $id)->update(['Or_Status' => '2']);

        return redirect('/manage_order02');

    }
    public function index_lv_2(){
        $data = DB::table('tbl_Order')->join('tbl_User','tbl_Order.Or_UserID','=','tbl_User.Us_ID')->leftjoin('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->where('tbl_Order.Or_Status', '2')->get();
        $level1 = DB::table('tbl_Order')->where('Or_Status', '1')->count();
        $level2 = DB::table('tbl_Order')->where('Or_Status', '2')->count();
        $level3 = DB::table('tbl_Order')->where('Or_Status', '3')->count();
        $level4 = DB::table('tbl_Order')->where('Or_Status', '4')->count();
        //echo $data;
        return view('admin.manage_order02',compact('data','level1','level2','level3','level4'));
    }
    public function update_lv_2($id){
        //echo $id;
        DB::table('tbl_Order')->where('Or_ID', $id)->update(['Or_Status' => '3']);
        return redirect('/manage_order03');
    }

    public function index_lv_3(){
        $data = DB::table('tbl_Order')->join('tbl_User','tbl_Order.Or_UserID','=','tbl_User.Us_ID')->leftjoin('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->where('tbl_Order.Or_Status', '3')->get();
        $level_1 = DB::table('tbl_Order')->where('Or_Status','1')->count();
        $level_2 = DB::table('tbl_Order')->where('Or_Status','2')->count();
        $level_3 = DB::table('tbl_Order')->where('Or_Status','3')->count();
        $level_4 = DB::table('tbl_Order')->where('Or_Status','4')->count();
        return view('admin.manage_order03', compact('level_1', 'level_2', 'level_3', 'level_4', 'data'));
    }

    public function update_lv_3($id){
        $lv =  DB::table('tbl_Order')->where('Or_ID', $id)->update(['Or_Status' => '4']);
        return redirect('/manage_order04');
    }

    public function index_lv_4(){
        $data = DB::table('tbl_Order')->join('tbl_User','tbl_Order.Or_UserID','=','tbl_User.Us_ID')->leftjoin('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->where('tbl_Order.Or_Status', '4')->get();
        $level_1 = DB::table('tbl_Order')->where('Or_Status','1')->count();
        $level_2 = DB::table('tbl_Order')->where('Or_Status','2')->count();
        $level_3 = DB::table('tbl_Order')->where('Or_Status','3')->count();
        $level_4 = DB::table('tbl_Order')->where('Or_Status','4')->count();
        return view('admin.manage_order04', compact('level_1', 'level_2', 'level_3', 'level_4', 'data'));
    }
}
