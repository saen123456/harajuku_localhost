<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminShopController extends Controller
{
    //
    public function login_view(){
        return view('admin.login');
    }
    public function login_check(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = DB::table('tbl_Store')->where('St_User_Shop', $input['username'])->where('St_Pass_Shop',$input['password'])->get();
        if($data->count()==1){
            foreach($data as $row) :
                $request->session()->put('St_ID', $row->St_ID);
                $request->session()->put('St_Name', $row->St_Name);
                $request->session()->put('St_Logo', $row->St_Logo);
            endforeach;
            $data = DB::table('tbl_Food_Master')->join('tbl_Store','tbl_Food_Master.St_ID','=','tbl_Store.St_ID')->where('tbl_Food_Master.St_ID', $request->session()->get('St_ID'))->orderBy('tbl_Food_Master.Fm_ID', 'desc')->get();

            return redirect('manage_store02');
            //echo $data;
        }else{
            return redirect('admin_shop/login')->with('error','You username or Password Wrong!!');
        }
    }
    public function manage_store02_view(Request $request){
        //echo $request->session()->get('St_ID');
        if($request->session()->has('St_ID')){
            $data = DB::table('tbl_Food_Master')->join('tbl_Store','tbl_Food_Master.St_ID','=','tbl_Store.St_ID')->where('tbl_Food_Master.St_ID', $request->session()->get('St_ID'))->orderBy('tbl_Food_Master.Fm_ID', 'desc')->get();
            return view('admin/manage_store02',compact('data'));
            //return view('admin/manage_store02',compact('data'));
            //echo $data;
        }else{
            return redirect('admin_shop/login')->with('error','You must login!!');
        }
        
    }
    public function insert_food(Request $request){
        //echo "test";
        $request->validate([
            'food_name' => 'required|min:3|max:1000',
            'food_price' => 'required',
            'food_type' => 'required',
            'food_detail' => 'required|min:3|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('upload_shop_food'), $imageName);
        $image_path = 'upload_shop_food/'. $imageName;
        /* Store $imageName name in DATABASE from HERE */
    

        DB::table('tbl_Food_Master')->insert([
            ['Fm_Name' => $request['food_name'],'Fm_Description' => $request['food_detail'], 'Fm_Price' => $request['food_price'], 
            'Fm_Type' => $request['food_type'], 'Fm_Image' => $image_path, 'Fm_Status' => "false", 'St_ID'=>$request->session()->get('St_ID')]
        ]);
        return back()->with('success','You have successfully upload image.');

       
    }
    public function update_food($id){
        //echo $id;
        $data = DB::table('tbl_Food_Master')->where('Fm_ID', $id)->get();
        return view('admin/manage_store02-1',compact('data'));
    }
    public function update_food_db(Request $request,$id){
        if(isset($request['image'])){
            $imageName = time().'.'.$request->image->extension();  
     
            $request->image->move(public_path('upload_shop_food'), $imageName);
            $image_path = 'upload_shop_food/'. $imageName;

            DB::table('tbl_Food_Master')->where('Fm_ID', $id)->update(['Fm_Name' => $request['food_name'],'Fm_Description' => $request['food_detail'], 'Fm_Price' => $request['food_price'],'Fm_Type' => $request['food_type'], 'Fm_Image' => $image_path]);
            return redirect('/manage_store02');
        }else{
            DB::table('tbl_Food_Master')->where('Fm_ID', $id)->update(['Fm_Name' => $request['food_name'],'Fm_Description' => $request['food_detail'], 'Fm_Price' => $request['food_price'],'Fm_Type' => $request['food_type']]);
            return redirect('/manage_store02');
        }
        
    }
    public function getfoodinfo($id)
    {  
          
        $employees = DB::table('tbl_Food_Master')->select('*')->where('Fm_ID', $id)->get(); 
         
         // Fetch all records
         $userData['data'] = $employees;
    
        
         echo json_encode($userData);
    }
    public function store_delete(Request $request){
        $id = $request['id'];
        DB::table('tbl_Food_Master')->where('Fm_ID', $id)->delete();
        return back();
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('admin_shop/login');
    }
}
