<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiderController extends Controller
{
    //
    public function login_view(){
        return view('rider/login');
    }
    public function login_check(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = DB::table('tbl_Delivery_Rider')->where('Dr_Rider_ID', $input['username'])->where('Dr_Rider_Pass',$input['password'])->get();
        if($data->count()==1){
            foreach($data as $row) :
                $request->session()->put('Dr_ID', $row->Dr_ID);
                $request->session()->put('Dr_Rider_Name', $row->Dr_Rider_Name);
                $request->session()->put('Dr_Image', $row->Dr_Image);
            endforeach;
            //$data = DB::table('tbl_Food_Master')->join('tbl_Store','tbl_Food_Master.St_ID','=','tbl_Store.St_ID')->where('tbl_Food_Master.St_ID', $request->session()->get('St_ID'))->orderBy('tbl_Food_Master.Fm_ID', 'desc')->get();

            return redirect('rider/delivery');
            //echo $data;
        }else{
            return redirect('rider/login')->with('error','You username or Password Wrong!!');
        }
    }
    public function delivery_view(Request $request){
        if($request->session()->has('Dr_Rider_Name')){
            $data = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->WhereNull('tbl_Order.Dr_ID')->orderBy('tbl_Order.Or_ID', 'asc')->get();
            //echo $request->session()->get('Dr_ID');
            $level1 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->WhereNull('tbl_Order.Dr_ID')->count();
            $level2 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','1')->count();
            $level3 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','2')->count();
            $level4 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','3')->count();
            //echo $level2;
            return view('rider/delivery',compact('data','level1','level2','level3','level4'));
        }else{
            return redirect('rider/login')->with('error','You must login!!');
        }
    }
    public function cornfirm_order(Request $request,$id){
        //echo $id;
        //echo $request->session()->get('Dr_ID');
        DB::table('tbl_Order')->where('Or_ID', $id)->update(['Dr_ID' => $request->session()->get('Dr_ID'),'Dr_Status' => '1']);
        return redirect('rider/details');

    }
    public function details_view(Request $request){
        //return view('rider/details');
        if($request->session()->has('Dr_Rider_Name')){
            $data = DB::table('tbl_Order')->join('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Dr_ID',$request->session()->get('Dr_ID'))->where('tbl_Order.Dr_Status','1')->orderBy('tbl_Order.Or_ID', 'asc')->get();
            //echo $data;
            $level1 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->WhereNull('tbl_Order.Dr_ID')->count();
            $level2 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','1')->count();
            $level3 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','2')->count();
            $level4 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','3')->count();
            //echo $level2;
            return view('rider/details',compact('data','level1','level2','level3','level4'));
        }else{
            return redirect('rider/login')->with('error','You must login!!');
        }
    }

    public function sent_order(Request $request,$id){
        //echo $id;
        //echo $request->session()->get('Dr_ID');
        DB::table('tbl_Order')->where('Or_ID', $id)->update(['Dr_Status' => '2']);
        return redirect('rider/sent');

    }
    
    public function sent_view(Request $request){
        //return view('rider/sent');
        if($request->session()->has('Dr_Rider_Name')){
            $data = DB::table('tbl_Order')->join('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Dr_ID',$request->session()->get('Dr_ID'))->where('tbl_Order.Dr_Status','2')->orderBy('tbl_Order.Or_ID', 'asc')->get();
            //echo $data;
            $level1 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->WhereNull('tbl_Order.Dr_ID')->count();
            $level2 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','1')->count();
            $level3 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','2')->count();
            $level4 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','3')->count();
            //echo $level2;
            return view('rider/sent',compact('data','level1','level2','level3','level4'));
        }else{
            return redirect('rider/login')->with('error','You must login!!');
        }
    }

    public function success_order(Request $request,$id){
        //echo $id;
        //echo $request->session()->get('Dr_ID');
        DB::table('tbl_Order')->where('Or_ID', $id)->update(['Dr_Status' => '3']);
        return redirect('rider/report');
    }

    public function report_view(Request $request){
        //return view('rider/report');
        if($request->session()->has('Dr_Rider_Name')){
            $data = DB::table('tbl_Order')->join('tbl_Food_Master','tbl_Order.Or_Fm_ID','=','tbl_Food_Master.Fm_ID')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Dr_ID',$request->session()->get('Dr_ID'))->where('tbl_Order.Dr_Status','3')->orderBy('tbl_Order.Or_ID', 'asc')->get();
            //echo $data;
            $level1 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->WhereNull('tbl_Order.Dr_ID')->count();
            $level2 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','1')->count();
            $level3 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','2')->count();
            $level4 = DB::table('tbl_Order')->join('tbl_Store','tbl_Order.St_ID','=','tbl_Store.St_ID')->where('tbl_Order.Or_Status','3')->where('tbl_Order.Dr_Status','3')->count();
            //echo $level2;
            return view('rider/report',compact('data','level1','level2','level3','level4'));
        }else{
            return redirect('rider/login')->with('error','You must login!!');
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('rider/login');
    }
}
