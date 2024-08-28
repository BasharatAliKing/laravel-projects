<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class employee extends Controller
{
    public function allSoldiers(){
        $soldiers=DB::table('employees')
                      ->join('cities','employees.city','=','cities.id')
                      ->paginate(4);
        return view('allSoldiers',['data'=>$soldiers]);
    }
    public function addSoldier(Request $req){
        $soldier=DB::table('employees')->insert([
            'name'=>$req->name,
            'age'=>$req->age,
            'rank'=>$req->rank,
            'contact'=>$req->contact,
            'address'=>$req->address
        ]);
        if($soldier){
            return redirect()->route('home');
        }
    }
    public function viewsoldier(string $id){
       $soldier=DB::table('employees')->where('id',$id)->get();
       return view('viewSoldier',['data'=>$soldier]);
    }
    public function deleteSoldier(string $id){
        $soldier=DB::table('employees')->where('id',$id)->delete();

        if($soldier){
            return redirect()->route('home');
        }
    }
    public function update(string $id){
        $soldier=DB::table('employees')->where('id',$id)->get();
        return view('updateSoldier',['data'=>$soldier]);
    }
    public function updateSoldier(Request $req,$id){
        $soldier=DB::table('employees')->where('id',$id)->update([
            'name'=>$req->name,
            'age'=>$req->age,
            'rank'=>$req->rank,
            'contact'=>$req->contact,
            'address'=>$req->address
        ]);
        if($soldier){
            return redirect()->route('home');
        }
    }
}
