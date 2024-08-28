<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientsSatisfyAdminController extends Controller
{
   public function view(){
    $satisfy=DB::table('clientssatisfy')->get();
    return view('admin.clientsatisfy',['data'=>$satisfy]);
   }
   public function addaddclientstable(){
    return view('admin.addClientSatisfy');
   }
   public function addclientdata(Request $req){
    $satisfy=DB::table('clientssatisfy')->insert([
       'finished_projects'=> $req->finished_projects,
       'create_jobs'=> $req->create_jobs,
       'happy_customers'=> $req->happy_customers,
       'yearsof_experience'=> $req->yearsof_experience,
    ]);
    if($satisfy){
      return redirect()->route('clientSatisfy');
  }
   }
   public function deleteclient(string $id){
    $satisfy=DB::table('clientssatisfy')->where('id',$id)->delete();
    if($satisfy){
        return redirect()->route('clientSatisfy');
    }
   }
 
  public function view_update(string $id){
    $satisfy=DB::table('clientssatisfy')->where('id',$id)->get();
     return view('admin.updateClientSatisfy',['data'=>$satisfy]); 
  }
  public function update(Request $req,$id){
    $satisfy=DB::table('clientssatisfy')->where('id',$id)->update([
        'finished_projects'=> $req->finished_projects,
       'create_jobs'=> $req->create_jobs,
       'happy_customers'=> $req->happy_customers,
       'yearsof_experience'=> $req->yearsof_experience,
    ]);
    if($satisfy){
        return redirect()->route('clientSatisfy');
    }
  }

}
