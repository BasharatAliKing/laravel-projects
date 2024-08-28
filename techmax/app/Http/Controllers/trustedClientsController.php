<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class trustedClientsController extends Controller
{
    public function view(){
        $satisfy=DB::table('trusted_clients')->get();
        return view('admin.trustedClients',['data'=>$satisfy]);
       }
    public function addImg(){
        return view('admin.addTrustedClients');
    }
    public function add(Request $req){
        $img=$this->AddImage($req->file('image'));
      //  print_r($img);
        $satisfy=DB::table('trusted_clients')->insert([
            'image'=>$img,
        ]);
        if($satisfy){
            return redirect()->route('trustedclients');
        }
    }
    public function AddImage($image){
        $extension = $image->getClientOriginalExtension();
        $filename = rand(1, 5000) . time() . '.' . $extension;
        $image->move(public_path('assets/uploads/images'), $filename);
        $path = '/assets/uploads/images/' . $filename;
       return $path;
    }
    public function delete(string $id){
        $delete=DB::table('trusted_clients')->where('id',$id)->delete();
        if($delete){
            return redirect()->route('trustedclients');
        }
    }
    public function update_view(string $id){
        $update=DB::table('trusted_clients')->where('id',$id)->get();
        return view('admin.updateTrustedClient',['data'=>$update]);
    }
    public function update(Request $req,$id){
        $update=DB::table('trusted_clients')->where('id',$id)->update([
           'image'=>$req->image,
        ]);
        if($update){
            return redirect()->route('trustedclient');
        }
    }
}
