<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminShopController extends Controller
{
    //
    public function manage_store02_view(){
        $data = DB::table('tbl_Food_Master')->orderBy('Fm_ID', 'desc')->get();
        return view('admin/manage_store02',compact('data'));
    }
    public function insert_food(Request $request){
        echo "test";
        $request->validate([
            'food_name' => 'required|min:3|max:1000',
            'food_price' => 'required',
            'food_type' => 'required',
            'food_detail' => 'required|min:3|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('/upload_shop_food'), $imageName);
        $image_path = '/upload_shop_food/'. $imageName;
        /* Store $imageName name in DATABASE from HERE */
        // $bannerpic = new BannerPic([
        //     "image_name" => $imageName,
        //     "image_path" => '/upload_banner/'. $imageName
        // ]);
        // $bannerpic->save();

        DB::table('tbl_Food_Master')->insert([
            ['Fm_Name' => $request['food_name'],'Fm_Description' => $request['food_detail'], 'Fm_Price' => $request['food_price'], 
            'Fm_Type' => $request['food_type'], 'Fm_Image' => $image_path]
        ]);
        return back()->with('success','You have successfully upload image.');

       
    }
}
