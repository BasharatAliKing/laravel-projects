<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function viewServices(){
        $services=DB::table('services')->paginate(3);
        return view('admin.services',['data'=>$services]);
    }
    public function viewservice(string $id){
        $service=DB::table('services')->where('id',$id)->get();
        return view('admin.viewservice',['data'=>$service]);
    }
    // update View
    public function update_view(string $id){
        $service=DB::table('services')->where('id',$id)->get();
        return view('admin.updateService',['data'=>$service]);
    }
     // update Service 
    public function updateService(Request $req,$id){
        $service=DB::table('services')->where('id',$id)->update([
            'service_name'=>$req->service_name,
            'service_des'=>$req->service_des,
        ]);
        if($service){
            return redirect()->route('services');
        }
    }
    // delete service
    public function deleteService(string $id){
        $service=DB::table('services')->where('id',$id)->delete();

        if($service){
            return redirect()->route('services');
        }
    }
    public function serviceadd(Request $req){
        $img=$this->AddImage($req->file('image'));
        print_r($img);
        $service=DB::table('services')->insert([
            'image'=>$img,
            'service_name'=>$req->service_name,
            'service_des'=>$req->service_des,
            'service_longdes'=>$req->service_longdes,
        ]);
       if($service){
        return redirect()->route('services');
       }
    }
    public function AddImage($image){
        $extension = $image->getClientOriginalExtension();
        $filename = rand(1, 5000) . time() . '.' . $extension;
        $image->move(public_path('assets/uploads/images'), $filename);
        $path = '/assets/uploads/images/' . $filename;
       return $path;
    }
   
   
}
