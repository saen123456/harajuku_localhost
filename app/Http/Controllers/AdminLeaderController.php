<?php

namespace App\Http\Controllers;

use App\Models\BannerPic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLeaderController extends Controller
{
    //
    public function login_view(){
        return view('admin_leader.login');
    }
    public function manage_banner_view(){
        $data = DB::table('tbl_Banner')->orderBy('created_at', 'desc')->first();
        
        return view('admin_leader.manage_banner',compact('data'));
    }
    public function upload_banner(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('/upload_banner'), $imageName);
  
        /* Store $imageName name in DATABASE from HERE */
        $bannerpic = new BannerPic([
            "image_name" => $imageName,
            "image_path" => '/upload_banner/'. $imageName
        ]);
        $bannerpic->save();
    
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
    public function update_banner(Request $request,$id){
       // echo $id;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('/upload_banner'), $imageName);

      
        $image_path = 'upload_banner/'. $imageName;
        BannerPic::where('id', $id)->update(['image_name' => $imageName ,'image_path' => $image_path]);
        //$bannerpic->save();
    
        return back()
            ->with('success','You have successfully update image.')
            ->with('image',$imageName); 
       
    }
    public function delete_banner(Request $request,$id){
        //echo $id;
        BannerPic::where('id', $id)->delete();
        return back()
        ->with('success','You have successfully delete image.'); 
     }
}
